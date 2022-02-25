@extends('layouts.app')

@section('title', 'R6')

@section('content')
    <div class="r6-background">
        <div class="user-profil">
            <div class="img-profil">
            </div>
            <p>Pseudonyme</p>
        </div>
    </div>

    <section id="r6">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-8">
                    <div class="r6-card mb-3">
                        <div class="card bg-transparent">
                            <h5 class="card-header">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="{{ asset('assets/img/R6/triangle-r6.png') }}" alt="">
                                         LifeTime
                                    </div>

                                    <div class="col-md-9">
                                        <img src="{{ asset('assets/img/R6/time.png') }}" alt="time">
                                         557h Play Time
                                    </div>
                                </div>
                            </h5>
                            <div class="card-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <h6>
                                                Headshot
                                            </h6>
                                            <p>34.57%</p>

                                            <h6>
                                                Deaths
                                            </h6>
                                            <p>8,426</p>
                                        </div>
                                        <div class="col-md-2">
                                            <h6>
                                                K/D
                                            </h6>
                                            <p>1.14</p>

                                            <h6>
                                                Total XP
                                            </h6>
                                            <p>22,735,243</p>
                                        </div>
                                        <div class="col-md-2">
                                            <h6>
                                                Kills
                                            </h6>
                                            <p>9,564</p>

                                            <h6>
                                                Headshot
                                            </h6>
                                            <p>3,306</p>
                                        </div>
                                        <div class="col-md-2">
                                            <h6>
                                                Melee Kills
                                            </h6>
                                            <p>207</p>

                                            <h6>
                                                Matches
                                            </h6>
                                            <p>2,597</p>
                                        </div>
                                        <div class="col-md-2">
                                            <h6>
                                                Win %
                                            </h6>
                                            <p>52.4%</p>

                                            <h6>
                                                Losses
                                            </h6>
                                            <p>1,236</p>
                                        </div>
                                        <div class="col-md-2">
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

                    <div class="r6-card w-75">
                        <div class="card bg-transparent">
                            <h5 class="card-header">
                                <img src="{{ asset('assets/img/R6/triangle-r6.png') }}" alt="">
                                Ranked
                            </h5>
                            <div class="card-body">
                                <img src="{{ asset('assets/img/R6/gold.png') }}" alt="gold">

                                <div class="col">
                                    <h6>
                                        MMR Actuel
                                    </h6>

                                    <p>2.278</p>
                                </div>

                                <div class="col">
                                    <h6>
                                        Meilleur MMR
                                    </h6>

                                    <p>3.114</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="r6-card pb-4 mb-3">
                        <h5 class="card-header pt-3 px-2">
                            173 -> 174
                        </h5>
                        <div class="p-2">
                            <div class="progress bg-white bg-opacity-25 mt-2">
                                <div class="progress-bar bg-white text-dark fw-bold" role="progressbar" style="width: 25%;"
                                     aria-valuenow="25"
                                     aria-valuemin="0" aria-valuemax="100">25%
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="r6-card-operators">
                        <div class="card bg-transparent">
                            <h5 class="card-header">
                                <img src="{{ asset('assets/img/R6/medaille.png') }}" alt="">
                                Meilleurs Opérateurs
                            </h5>
                            <div class="card-body">
                                <img src="{{ asset('assets/img/R6/mute.png') }}" alt="mute">
                                <img src="{{ asset('assets/img/R6/hibana.png') }}" alt="hibana">
                                <img src="{{ asset('assets/img/R6/lesion.png') }}" alt="lesion">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
