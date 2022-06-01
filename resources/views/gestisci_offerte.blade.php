@extends('layouts.locatore')

@section('title', 'Gestisci Offerte')

@section('content')
<div class="page-section" style="background-color:#E6E6FA">
    <div class="container">
        <div class="col text-center pb-3">
            <h1 class="mb-4">I tuoi annunci</h1>
            <a href = "{{ route('inserimentoannuncio') }}" class="btn btn-outline-light"> Annunci opzionati</a>
            <a href = "{{ route('inserimentoannuncio') }}" class="btn btn-outline-light">Inserisci nuovo</a>
        </div>
        @include('layouts/catalogo')
    </div>
</div>
@endsection
