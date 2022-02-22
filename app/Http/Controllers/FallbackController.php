<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Redirect;

class FallbackController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  string  $path
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function get(string $path)
    {
        /** @var \App\Models\Redirect|null $redirect */
        $redirect = Redirect::enabled()->firstWhere('source', $path);

        if ($redirect !== null) {
            return redirect($redirect->destination, $redirect->code);
        }

        $page = Page::enabled()->where('slug', $path)->firstOrFail();

        $this->authorize('view', $page);

        return view('pages.show', ['page' => $page]);
    }
}
