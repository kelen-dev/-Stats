@extends('layouts.search-player')

@section('title', 'Search Valorant')

@section('content')
    <div class="container">
        <div class="search-bar">
            <div class="row">
                <div class="col col-md-1 game game-valorant">
                    <img src="{{ asset('assets/img/Search/origin.png') }}" alt="origin">
                </div>
                <div class="col col-md-1 game game-valorant">
                    <img src="{{ asset('assets/img/Search/xbox.png') }}" alt="xbox">
                </div>
                <div class="col col-md-1 game game-valorant">
                    <img src="{{ asset('assets/img/Search/ps.png') }}" alt="playstation">
                </div>
                <div class="col col-md-9 search">
                    Recherchez un joueur
                </div>
            </div>
        </div>
    </div>
@endsection
