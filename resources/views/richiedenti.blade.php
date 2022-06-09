@extends('layouts.locatore')

@section('title', 'Show utenti')

@isset($annuncio)
@isset($utenti)
@section('content')
@if(!$utenti->isEmpty())
<div class="page-section">
    <div class="container">
        <p>Utenti che hanno opzionato l'annuncio {{ $annuncio->nomeannuncio }}</p>
        @foreach ($utenti as $utente)
        <div class="container py-3">
            <div class="row justify-content-center mb-3">
                <div class="col-md-12 col-xl-10">
                    <div class="card shadow-0 border rounded-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-8 col-xl-8">
                                    <h5>{{ $utente->username }}</h5>
                                    <div class="d-flex flex-row">
                                        <div class="text-danger mb-1 me-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <p class="text-truncate mb-4 mb-md-0">
                                        {{ $utente->nome }} {{ $utente->cognome }}
                                    </p>
                                    <p class="text-truncate mb-4 mb-md-0">
                                        Genere: {{ $utente->genere }}
                                    </p>
                                    <p class="text-truncate mb-4 mb-md-0">
                                        Età: {{ $utente->eta }}
                                    </p>
                                    <p class="text-truncate mb-4 mb-md-0">
                                        Recapito: {{ $utente->recapito }}
                                    </p>
                                    <p class="text-truncate mb-4 mb-md-0">
                                        Mail: {{ $utente->mail }}
                                    </p>
                                </div>
                                <div class="col-md-6 col-lg-3 col-xl-4 border-sm-start-none border-start">
                                    <div class="d-flex flex-column mt-4">
                                        <a href = "{{ route('messaggistica', [Auth::user()->id, $utente->id]) }}" class="btn btn-primary btn-sm" type="button">Contatta Locatario</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div> 
@else
<div class="page-section">
    <div class="container">
        <p>L'annuncio non è stato opzionato da alcun locatario</p>
    </div>
</div> 
@endif
@endsection
@endisset()
@endisset()