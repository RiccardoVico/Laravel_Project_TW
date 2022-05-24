@extends('layouts.locatore')

@section('title', 'Home')

@section('header')
<div class="page-banner home-banner mb-5">
    <div class="slider-wrapper">
        <div class="owl-carousel hero-carousel">
            <div class="hero-carousel-item">
                <img src="images/casetta.png" alt="">
                <div class="img-caption">
                    <div class="subhead"></div>
                    <h1 class="mb-4">Benvenuto</h1>
                    <h5 class="mb-4">Fai clic su "Gestisci le tue offerte" per inserire nuovi annunci 
                        o modificare quelli già inseriti</h5>
                    <a href = "{{ route('gestisci_offerte') }}" class="btn btn-outline-light">Gestisci le tue offerte</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="page-section">
    <div class="container">
        <div class="col text-center pb-3">
            <h1>Catalogo completo annunci disponibili</h1>
        </div>
        @include('layouts/catalogo')
    </div>
</div>
@endsection
