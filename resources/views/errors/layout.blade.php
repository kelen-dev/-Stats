@extends('layouts.errors')

@section('content')
    <div class="container content error-page">
        <div class="row center">
            <div class="col col-md-8">
                <div class="card bg-transparent">
                    <div class="card-header bg-black mb-2">{{ trans('errors.error') }}</div>

                    <div class="card-body bg-dark text-center">
                        <h1 class="pb-4 text-white">
                            @yield('code')
                        </h1>
                        <h2 class="pb-2">
                            @yield('title')
                        </h2>
                        <p>
                            @yield('message')
                        </p>

                        <a href="{{ route('home') }}" class="btn btn-principal">{{ trans('errors.home') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
