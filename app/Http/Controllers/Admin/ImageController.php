<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImageRequest;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ImageController extends Controller
{
    protected $imagesPath = 'img';

    public function index()
    {
        return view('admin.images.index', ['images' => Image::paginate()]);
    }

    public function create()
    {
        return view('admin.images.create');
    }

    public function store(ImageRequest $request)
    {
        $file = $request->file('image');
        $mimeType = $file->getMimeType();
        $extension = $this->normalizeExtensions($file->extension());
        $fileName = $request->input('slug').'.'.$extension;

        Validator::make(['slug' => $fileName], [
            'slug' => [Rule::unique('images', 'file')],
        ])->validate();

        $file->storeAs($this->imagesPath, $fileName, 'public');

        Image::create([
            'name' => $request->input('name'),
            'file' => $fileName,
            'type' => $mimeType,
        ]);

        return redirect()->route('admin.images.index')->with('success', trans('admin.images.status.created'));
    }

    public function edit(Image $image)
    {
        return view('admin.images.edit', ['image' => $image]);
    }

    public function update(ImageRequest $request, Image $image)
    {
        $fileName = $request->input('slug').'.'.$image->getExtension();

        Validator::make(['slug' => $fileName], [
            'slug' => [Rule::unique('images', 'file')->ignore($image->file, 'file')],
        ])->validate();

        if ($image->file !== $fileName) {
            Storage::disk('public')->move($this->getImagesPath($image->file), $this->getImagesPath($fileName));
        }

        $image->update([
            'name' => $request->input('name'),
            'file' => $fileName,
        ]);

        return redirect()->route('admin.images.index')->with('success', trans('admin.images.status.updated'));
    }

    public function destroy(Image $image)
    {
        Storage::disk('public')->delete($this->getImagesPath($image->file));

        $image->delete();

        return redirect()->route('admin.images.index')->with('success', trans('admin.images.status.deleted'));
    }

    protected function getImagesPath(string $fileName)
    {
        return "{$this->imagesPath}/{$fileName}";
    }

    protected function normalizeExtensions(string $name)
    {
        return str_replace('jpeg', 'jpg', strtolower($name));
    }
}
