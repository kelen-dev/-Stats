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
                                                Headshot
                                            </h6>
                                            <p>34.57%</p>

                                            <h6>
                                                Deaths
                                            </h6>
                                            <p>8,426</p>
                                        </div>
                                        <div class="col col-md-2">
                                            <h6>
                                                K/D
                                            </h6>
                                            <p>1.14</p>

                                            <h6>
                                                Total XP
                                            </h6>
                                            <p>22,735,243</p>
                                        </div>
                                        <div class="col col-md-2">
                                            <h6>
                                                Kills
                                            </h6>
                                            <p>9,564</p>

                                            <h6>
                                                Headshot
                                            </h6>
                                            <p>3,306</p>
                                        </div>
                                        <div class="col col-md-2">
                                            <h6>
                                                Melee Kills
                                            </h6>
                                            <p>207</p>

                                            <h6>
                                                Matches
                                            </h6>
                                            <p>2,597</p>
                                        </div>
                                        <div class="col col-md-2">
                                            <h6>
                                                Win %
                                            </h6>
                                            <p>52.4%</p>

                                            <h6>
                                                Losses
                                            </h6>
                                            <p>1,236</p>
                                        </div>
                                        <div class="col col-md-2">
                                            <h6>
                                                Wins
                                            </h6>
                                            <p>1,360</p>

                                            <h6>
                                                Blind Kills
                                            </h6>
                                            <p>14</p>
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
                                                <img src="{{ asset('assets/img/Battlefield/Medic.png') }}" alt="">
                                                Medic
                                            </h6>
                                            <p class="ps-3">44h 26m</p>
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
                                                <img src="{{ asset('assets/img/Battlefield/Medic.png') }}" alt="">
                                                Medic
                                            </h6>
                                            <p class="ps-3">44h 26m</p>
                                        </div>

                                        <div class="col col-md-2">
                                            <h6 class="d-flex align-items-center">
                                                <img src="{{ asset('assets/img/Battlefield/Medic.png') }}" alt="">
                                                Medic
                                            </h6>
                                            <p class="ps-3">44h 26m</p>
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
                            <img src="{{ asset('assets/img/Battlefield/battlefield-v.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
