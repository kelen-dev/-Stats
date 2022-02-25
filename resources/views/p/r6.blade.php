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
                <div class="col-md-9">
                    <div class="r6-card mb-3">
                        <div class="card bg-transparent">
                            <h5 class="card-header">
                                <img src="{{ asset('assets/img/Logos/triangle-r6.png') }}" alt="">
                                LifeTime
                            </h5>
                            <div class="card-body">
                                <h5 class="card-title">
                                    Special title treatment
                                </h5>
                                <p class="card-text">
                                    With supporting text below as a natural lead-in to additional
                                    content.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="r6-card w-75">
                        <div class="card bg-transparent">
                            <h5 class="card-header">
                                <img src="{{ asset('assets/img/Logos/triangle-r6.png') }}" alt="">
                                Ranked
                            </h5>
                            <div class="card-body">
                                <h5 class="card-title">
                                    Special title treatment
                                </h5>
                                <p class="card-text">
                                    With supporting text below as a natural lead-in to additional
                                    content.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="r6-card p-2 mb-5">
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

                    <div class="r6-card pb-2">
                        <div class="card bg-transparent">
                            <h5 class="card-header">
                                <img src="{{ asset('assets/img/Logos/medaille.png') }}" alt="">
                                Meilleurs Opérateurs
                            </h5>
                            <div class="card-body">
                                <h5 class="card-title">
                                    Special title treatment
                                </h5>
                                <p class="card-text">
                                    With supporting text below as a natural lead-in to additional content.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
