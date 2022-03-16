@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <div class="container text-center pt-4 join-us">
        <h1>
            Join Us
        </h1>
        <i class="fa-brands fa-2x fa-discord p-1"></i>
        <i class="fa-brands fa-2x fa-twitter p-1"></i>
    </div>

    <section class="py-5" id="games">
        <div class="ps-4 title">
            <h2 class="h3">
                Recherchez un joueur
            </h2>
            <p class="separator"></p>
        </div>
        <div class="d-flex">
            <div class="rainbow-six-siège">
                <a href="{{ route('search-r6') }}">
                    <img src="{{ asset('assets/img/characters/Rainbow%20six%20siège.png') }}" alt="Rainbow Six Siège">

                    <div class="content d-flex justify-content-center text-white">
                        <p>Rainbow six Siège</p>
                    </div>
                </a>
            </div>
            <div class="fortnite">
                <a href="{{ route('search-fortnite') }}">
                    <img src="{{ asset('assets/img/characters/Fortnite.png') }}" alt="Fortnite">

                    <div class="content d-flex justify-content-center text-white">
                        <p>Fortnite</p>
                    </div>
                </a>
            </div>
            <div class="league-of-legends">
                <a href="{{ route('search-lol') }}">
                    <img src="{{ asset('assets/img/characters/League%20of%20legends.png') }}" alt="League Of Legends">

                    <div class="content d-flex justify-content-center text-white">
                        <p>League of Legends</p>
                    </div>
                </a>
            </div>
            <div class="valorant">
                <a href="{{ route('search-valorant') }}">
                    <img src="{{ asset('assets/img/characters/Valorant.png') }}" alt="Valorant">

                    <div class="content d-flex justify-content-center text-white">
                        <p>Valorant</p>
                    </div>
                </a>
            </div>
            <div class="battlefield">
                <a href="{{ route('search-battlefield') }}">
                    <img src="{{ asset('assets/img/characters/Battlefield.png') }}" alt="Battlefield">

                    <div class="content d-flex justify-content-center text-white">
                        <p>Battlefield</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection
