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
        <div class="container pt-5">
            <div class="life-time">
                <div class="card bg-transparent">
                    <img src="{{ asset('assets/img/Logos/triangle-r6.png') }}" alt=""><h5 class="card-header"> Featured</h5>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
