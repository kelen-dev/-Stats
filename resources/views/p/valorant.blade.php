@extends('layouts.app')

@section('title', 'R6')

@section('content')
    <div class="valorant-background">
        <div class="user-profil">
            <div class="img-profil">
            </div>
            <p>Pseudonyme</p>
        </div>
    </div>

    <section id="valorant">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-8">
                    <div class="valorant-card mb-3">
                        <div class="card bg-transparent">
                            <h5 class="card-header">
                                <div class="row">
                                    <div class="col-md-3 d-flex align-items-center">
                                        <img src="{{ asset('assets/img/Valorant/Triangle.png') }}" alt="triangle">
                                        LifeTime
                                    </div>

                                    <div class="col-md-9 d-flex align-items-center">
                                        <img src="{{ asset('assets/img/Valorant/time.png') }}" alt="time">
                                        129h 26m Play Time
                                    </div>
                                </div>
                            </h5>
                            <div class="card-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <h6>
                                                Damage/<br>Round
                                            </h6>
                                            <p>156.1</p>
                                        </div>
                                        <div class="col-md-2">
                                            <h6>
                                                K/D
                                            </h6>
                                            <p>1.13</p>
                                        </div>
                                        <div class="col-md-2">
                                            <h6>
                                                Kills
                                            </h6>
                                            <p>3,961</p>
                                        </div>
                                        <div class="col-md-2">
                                            <h6>
                                                Kills/<br>Round
                                            </h6>
                                            <p>0.8</p>
                                        </div>
                                        <div class="col-md-2">
                                            <h6>
                                                Win %
                                            </h6>
                                            <p>59.8%</p>
                                        </div>
                                        <div class="col-md-2">
                                            <h6>
                                                Wins
                                            </h6>
                                            <p>137</p>
                                        </div>

                                        <div class="col-md-2">
                                            <h6>
                                                Deaths
                                            </h6>
                                            <p>3,519</p>
                                        </div>
                                        <div class="col-md-2">
                                            <h6>
                                                Assists
                                            </h6>
                                            <p>1,318</p>
                                        </div>
                                        <div class="col-md-2">
                                            <h6>
                                                Headshot
                                            </h6>
                                            <p>2,548</p>
                                        </div>
                                        <div class="col-md-2">
                                            <h6>
                                                Clutches
                                            </h6>
                                            <p>333</p>
                                        </div>
                                        <div class="col-md-2">
                                            <h6>
                                                Aces
                                            </h6>
                                            <p>4</p>
                                        </div>
                                        <div class="col-md-2">
                                            <h6>
                                                First Bloods
                                            </h6>
                                            <p>481</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="valorant-card w-75">
                        <div class="card bg-transparent">
                            <h5 class="card-header">
                                <img src="{{ asset('assets/img/Valorant/Triangle.png') }}" alt="">
                                Ranked
                            </h5>
                            <div class="card-body">
                                <img src="{{ asset('assets/img/Valorant/Radiant.png') }}" alt="radiant">

                                <div class="col">
                                    <h6>
                                        RR Actuel
                                    </h6>

                                    <p>1,113</p>
                                </div>

                                <div class="col">
                                    <h6>
                                        Meilleur RR
                                    </h6>

                                    <p>1,513</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="valorant-card-operators">
                        <div class="card bg-transparent">
                            <h5 class="card-header d-flex align-items-center">
                                <img src="{{ asset('assets/img/Valorant/medaille.png') }}" alt="">
                                Meilleurs Opérateurs
                            </h5>
                            <div class="card-body">
                                <img src="{{ asset('assets/img/Valorant/operator1.png') }}" alt="">
                                <img src="{{ asset('assets/img/Valorant/operator2.png') }}" alt="">
                                <img src="{{ asset('assets/img/Valorant/operator3.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
