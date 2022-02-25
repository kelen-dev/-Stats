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
                                <img src="{{ asset('assets/img/R6/triangle-r6.png') }}" alt="">
                                LifeTime
                            </h5>
                            <div class="card-body">

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

                                <h5>
                                    MMR Actuel
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="r6-card p-2 mb-3">
                        <div class="container p-2">
                            <div>
                                <p>173 -> 174</p>
                                <div class="progress">
                                    <div class="progress-bar bg-dark" role="progressbar" style="width: 25%;"
                                         aria-valuenow="25"
                                         aria-valuemin="0" aria-valuemax="100">25%
                                    </div>
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
