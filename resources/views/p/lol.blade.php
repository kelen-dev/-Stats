@extends('layouts.app')

@section('title', 'LOL')

@section('content')
    <div class="lol-background">
        <div class="user-profil">
            <div class="img-profil">
            </div>
            <p>Pseudonyme</p>
        </div>
    </div>

    <section id="lol">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-8">
                    <div class="lol-card mb-3">
                        <div class="card bg-transparent">
                            <h5 class="card-header">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="{{ asset('assets/img/Lol/Triangle.png') }}" alt="">
                                        LifeTime
                                    </div>

                                    <div class="col-md-9 d-flex align-items-center">
                                        <img class="me-1" src="{{ asset('assets/img/R6/time.png') }}" alt="time">
                                        129h 26m Play Time
                                    </div>
                                </div>
                            </h5>
                            <div class="card-body">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-md-2">
                                            <h6>
                                                Damage/<br>Round
                                            </h6>
                                            <p>184.64</p>
                                        </div>
                                        <div class="col-md-2">
                                            <h6>
                                                K/D
                                            </h6>
                                            <p>1.33</p>
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
                                            <p>581</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="lol-card w-75">
                        <div class="card bg-transparent">
                            <h5 class="card-header">
                                <img src="{{ asset('assets/img/Lol/Triangle.png') }}" alt="">
                                Ranked
                            </h5>
                            <div class="card-body">
                                <img src="{{ asset('assets/img/Lol/Grade.png') }}" alt="gold">

                                <div class="col">
                                    <h6>
                                        LP Actuel
                                    </h6>

                                    <p>1,798</p>
                                </div>

                                <div class="col">
                                    <h6>
                                        Meilleur LP
                                    </h6>

                                    <p>1,798</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="lol-card-champions">
                        <div class="card bg-transparent">
                            <h5 class="card-header">
                                <img src="{{ asset('assets/img/Lol/medaille.png') }}" alt="">
                                Meilleurs Champions
                            </h5>
                            <div class="card-body justify-content-center">
                                <div class="row">
                                    <div class="col">
                                        <img class="m-1" src="{{ asset('assets/img/Lol/Champion1.png') }}" alt="mute">
                                    </div>
                                    <div class="col">
                                        <img class="m-1" src="{{ asset('assets/img/Lol/Champion2.png') }}" alt="hibana">
                                    </div>
                                    <div class="col">
                                        <img class="m-1" src="{{ asset('assets/img/Lol/Champion3.png') }}" alt="lesion">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
