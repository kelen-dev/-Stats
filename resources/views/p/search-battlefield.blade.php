@extends('layouts.search-player')

@section('title', 'Search Battlefield')

@section('content')
    <div class="container">
        <div class="search-bar">
            <div class="row">
                <div class="col col-md-1 game game-battlefield">
                    <img src="{{ asset('assets/img/Search/origin.png') }}" alt="origin">
                </div>
                <div class="col col-md-1 game game-battlefield">
                    <img src="{{ asset('assets/img/Search/xbox.png') }}" alt="xbox">
                </div>
                <div class="col col-md-1 game game-battlefield">
                    <img src="{{ asset('assets/img/Search/ps.png') }}" alt="playstation">
                </div>
                <div class="col col-md-8 search">
                    Recherchez un joueur
                </div>
                <div class="col col-md-1 bg-secondary d-flex justify-content-center align-items-center">
                    <a href="{{ route('battlefield') }}">
                        <i class="text-dark fa-solid fa-magnifying-glass"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
