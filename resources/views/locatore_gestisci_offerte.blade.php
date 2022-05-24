@extends('layouts.locatore')

@section('title', 'Gestisci Offerte')

@section('content')
<div class="page-section" style="background-color:#E6E6FA">
    <div class="container">
        <div class="col text-center pb-3">
            <h1 class="mb-4">I tuoi annunci</h1>
            <button type="button" class="btn btn-success">Inserisci Nuovo</button>
        </div>
        @include('layouts/catalogo')
    </div>
</div>
@endsection
