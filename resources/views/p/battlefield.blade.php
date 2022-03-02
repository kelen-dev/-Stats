@extends('layouts.app')

@section('title', 'R6')

@section('content')
    <div class="battlefield-background">
        <div class="user-profil">
            <div class="img-profil">
            </div>
            <p>Pseudonyme</p>
        </div>
    </div>

    <section id="battlefield">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-8">
                    <div class="battlefield-card mb-3">
                        <div class="card bg-transparent">
                            <h5 class="card-header">
                                <div class="row">
                                    <div class="col col-md-3 d-flex align-items-center">
                                        <img src="{{ asset('assets/img/Battlefield/Triangle.png') }}" alt="">
                                        LifeTime
                                    </div>

                                    <div class="col col-md-9 d-flex align-items-center">
                                        <img src="{{ asset('assets/img/Battlefield/time.png') }}" alt="time">
                                        112h 36m 30s Play Time
                                    </div>
                                </div>
                            </h5>
                            <div class="card-body justify-content-center">
                                <div class="container">
                                    <div class="row">
                                        <div class="col col-md-2">
                                            <h6>
                                                Score/Min
                                            </h6>
                                            <p>265.64</p>
                                            <br>
                                            <h6>
                                                Deaths
                                            </h6>
                                            <p>186</p>
                                        </div>
                                        <div class="col col-md-2">
                                            <h6>
                                                K/D
                                            </h6>
                                            <p>0.69</p>
                                            <br>
                                            <h6>
                                                Assists
                                            </h6>
                                            <p>51</p>
                                        </div>
                                        <div class="col col-md-2">
                                            <h6>
                                                Kills
                                            </h6>
                                            <p>128</p>
                                            <br>
                                            <h6>
                                                Damage
                                            </h6>
                                            <p>18,626</p>
                                        </div>
                                        <div class="col col-md-2">
                                            <h6>
                                                Kills/Min
                                            </h6>
                                            <p>0.46</p>
                                            <br>
                                            <h6>
                                                Heals
                                            </h6>
                                            <p>26</p>
                                        </div>
                                        <div class="col col-md-2">
                                            <h6>
                                                Win %
                                            </h6>
                                            <p>50.0%</p>
                                            <br>
                                            <h6>
                                                Revives
                                            </h6>
                                            <p>137</p>
                                        </div>
                                        <div class="col col-md-2">
                                            <h6>
                                                Wins
                                            </h6>
                                            <p>15</p>
                                            <br>
                                            <h6>
                                                Resupplie
                                            </h6>
                                            <p>19</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="battlefield-card">
                        <div class="card bg-transparent">
                            <h5 class="card-header d-flex align-items-center">
                                <img src="{{ asset('assets/img/Battlefield/Triangle.png') }}" alt="">
                                Ranked
                            </h5>
                            <div class="card-body justify-content-center">
                                <div class="container">
                                    <div class="row">
                                        <div class="col col-md-2">
                                            <h6 class="d-flex align-items-center">
                                                <img src="{{ asset('assets/img/Battlefield/Assault.png') }}" alt="">
                                                Assault
                                            </h6>
                                            <p class="ps-3">44h 57m</p>
                                        </div>

                                        <div class="col col-md-2">
                                            <h6 class="d-flex align-items-center">
                                                <img src="{{ asset('assets/img/Battlefield/Medic.png') }}" alt="">
                                                Medic
                                            </h6>
                                            <p class="ps-3">44h 26m</p>
                                        </div>

                                        <div class="col col-md-2">
                                            <h6 class="d-flex align-items-center">
                                                <img src="{{ asset('assets/img/Battlefield/Recon.png') }}" alt="">
                                                Recon
                                            </h6>
                                            <p class="ps-3">20h 38m</p>
                                        </div>

                                        <div class="col col-md-2">
                                            <h6 class="d-flex align-items-center">
                                                <img src="{{ asset('assets/img/Battlefield/Support.png') }}" alt="">
                                                Support
                                            </h6>
                                            <p class="ps-3">19h 24m</p>
                                        </div>

                                        <div class="col col-md-2">
                                            <h6 class="d-flex align-items-center">
                                                <img src="{{ asset('assets/img/Battlefield/Tank.png') }}" alt="">
                                                Tanker
                                            </h6>
                                            <p class="ps-3">2h 05m</p>
                                        </div>

                                        <div class="col col-md-2">
                                            <h6 class="d-flex align-items-center">
                                                <img src="{{ asset('assets/img/Battlefield/Avion.png') }}" alt="">
                                                Pilot
                                            </h6>
                                            <p class="ps-3">1h 04m</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="battlefield-card battlefield-card-level pb-4 mb-3">
                        <h5 class="card-header d-flex align-items-center pt-3 px-2">
                            <img src="{{ asset('assets/img/Battlefield/level.png') }}" alt=""> -> 109
                        </h5>
                        <div class="p-2">
                            <div class="progress bg-dark bg-opacity-25 mt-2">
                                <div class="progress-bar bg-dark text-light fw-bold" role="progressbar"
                                     style="width: 25%;"
                                     aria-valuenow="25"
                                     aria-valuemin="0" aria-valuemax="100">
                                    25%
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="battlefield-card-assault">
                        <div class="card bg-transparent">
                            <img class="medaille" src="{{ asset('assets/img/Battlefield/medaille.png') }}" alt="">
                            <img class="logo-assault" src="{{ asset('assets/img/Battlefield/Logo Assault.png') }}" alt="">
                            <h2>Assault</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
