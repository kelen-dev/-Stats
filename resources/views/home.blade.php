@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <div class="container text-center pt-4">
        <h1>
            Join Us
        </h1>
        <i class="fa-brands fa-discord"></i>
        <i class="fa-brands fa-twitter"></i>
    </div>

    <section id="games">
        <div class="d-flex">
            <div class="rainbow-six-siège">
                <img src="{{ asset('assets/img/characters/Rainbow%20six%20siège.png') }}" alt="Rainbow Six Siège">
            </div>
            <div class="fortnite">
                <img src="{{ asset('assets/img/characters/Fortnite.png') }}" alt="Fortnite">
            </div>
            <div class="league-of-legends">
                <img src="{{ asset('assets/img/characters/League%20of%20legends.png') }}" alt="League Of Legends">
            </div>
            <div class="valorant">
                <img src="{{ asset('assets/img/characters/Valorant.png') }}" alt="Valorant">
            </div>
            <div class="battlefield">
                <img src="{{ asset('assets/img/characters/Battlefield.png') }}" alt="Battlefield">
            </div>
        </div>
    </section>
@endsection
