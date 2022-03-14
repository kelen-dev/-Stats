@extends('layouts.app')

@section('title', 'Fortnite')

@section('content')
    <div class="fortnite-background">
        <div class="user-profil">
            <div class="img-profil">
            </div>
            <p>Pseudonyme</p>
        </div>
    </div>

    <section id="fortnite">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-8">
                    <div class="fortnite-card mb-3">
                        <div class="card bg-transparent">
                            <h5 class="card-header">
                                <div class="row">
                                    <div class="col-md-3 p-0">
                                        <img src="{{ asset('assets/img/Fortnite/triangle.png') }}" alt="">
                                        LifeTime
                                    </div>

                                    <div class="col-md-9 d-flex align-items-center p-0">
                                        <img class="me-1" src="{{ asset('assets/img/R6/time.png') }}" alt="time">
                                        6d 22h 32m Play Time
                                    </div>
                                </div>
                            </h5>
                            <div class="card-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <h6>
                                                Score
                                            </h6>
                                            <p>
                                                257,702
                                            </p>

                                            <h6>
                                                Top 6/12/25
                                            </h6>
                                            <p>
                                                709
                                            </p>
                                        </div>
                                        <div class="col-md-2">
                                            <h6>
                                                K/D
                                            </h6>
                                            <p>
                                                1.37
                                            </p>

                                            <h6>
                                                Kills/Match
                                            </h6>
                                            <p>
                                                1.43
                                            </p>
                                        </div>
                                        <div class="col-md-2">
                                            <h6>
                                                Kills
                                            </h6>
                                            <p>
                                                3,267
                                            </p>

                                            <h6>
                                                Kills/Min
                                            </h6>
                                            <p>
                                                0.32
                                            </p>
                                        </div>
                                        <div class="col-md-2">
                                            <h6>
                                                Top 3/5/10
                                            </h6>
                                            <p>
                                                343
                                            </p>

                                            <h6>
                                                Heals
                                            </h6>
                                            <p>
                                                26
                                            </p>
                                        </div>
                                        <div class="col-md-2">
                                            <h6>
                                                Win %
                                            </h6>
                                            <p>
                                                3.70
                                            </p>

                                            <h6>
                                                Revives
                                            </h6>
                                            <p>
                                                137
                                            </p>
                                        </div>
                                        <div class="col-md-2">
                                            <h6>
                                                Wins
                                            </h6>
                                            <p>
                                                93
                                            </p>

                                            <h6>
                                                Resupplie
                                            </h6>
                                            <p>
                                                19
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="fortnite-card w-75">
                        <div class="card bg-transparent">
                            <h5 class="card-header">
                                <img src="{{ asset('assets/img/Fortnite/triangle.png') }}" alt="">
                                Ranked
                            </h5>
                            <div class="card-body">
                                <img src="{{ asset('assets/img/Fortnite/medaille.png') }}" alt="gold">

                                <div class="col">
                                    <h6>
                                        TRN Rating
                                    </h6>

                                    <p>
                                        1,200
                                    </p>
                                </div>

                                <div class="col">
                                    <h6>
                                        Meilleur TRN
                                    </h6>

                                    <p>
                                        1,300
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="fortnite-card-stats">
                        <div class="card bg-transparent">
                            <nav class="card-header p-0">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-solo-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-solo" type="button" role="tab" aria-controls="nav-solo"
                                            aria-selected="true">
                                        Solo
                                    </button>
                                    <button class="nav-link" id="nav-duo-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-duo" type="button" role="tab"
                                            aria-controls="nav-duo" aria-selected="false">
                                        Duo
                                    </button>
                                    <button class="nav-link" id="nav-trio-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-trio" type="button" role="tab"
                                            aria-controls="nav-trio" aria-selected="false">
                                        Trio
                                    </button>
                                </div>
                            </nav>

                            <div class="card-body tab-content justify-content-center" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-solo" role="tabpanel"
                                     aria-labelledby="nav-home-tab">
                                    @include('.p.fortnite.stats.solo')
                                </div>
                                <div class="tab-pane fade" id="nav-duo" role="tabpanel"
                                     aria-labelledby="nav-duo-tab">
                                    @include('.p.fortnite.stats.duo')
                                </div>
                                <div class="tab-pane fade" id="nav-trio" role="tabpanel"
                                     aria-labelledby="nav-trio-tab">
                                    @include('.p.fortnite.stats.trio')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
