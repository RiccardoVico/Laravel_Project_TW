@extends('layouts.public')

@section('title', 'Show utenti')

@section('content')
<div class="page-section">
    <div class="container">
        <p>UTENTI CHE HANNO OPZIONATO I TUOI ANNUNCI</p>
        @foreach($annunci as $x)
             
             @foreach($x as $xx)
                 
                 {{$xx->nome}}
                 {{$xx->cognome}}
                 {{$xx->genere}}
                 {{$xx->recapito}}
                 
                 
            @endforeach
        @endforeach
    </div>
</div> 
@endsection