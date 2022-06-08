@extends('layouts.locatore')

@section('title', 'Gestisci Offerte')

@section('content')
<div class="page-section" style="background-color:#E6E6FA">
    <div class="container">
        <div class="col text-center pb-3">
            @isset($opzionati)
            @if(!$opzionati)
            <h1 class="mb-4">I tuoi annunci</h1>
            <a href = "{{ route('gestisci_offerte', [Auth::user()->id, 1]) }}" class="btn btn-light"> Annunci opzionati</a>
            @else
            <h1 class="mb-4">Annunci che sono stati opzionati</h1>
            <a href = "{{ route('gestisci_offerte', [Auth::user()->id, 0]) }}" class="btn btn-light"> Tutti gli annunci</a>
            @endif
            @endisset()
            <a href = "{{ route('inserisci_annuncio') }}" class="btn btn-light">Inserisci nuovo</a>
        </div>
        @include('layouts/catalogo')
    </div>
</div>
@endsection
