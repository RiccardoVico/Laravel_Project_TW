@extends('layouts.admin')

@section('title', 'Stats')


@section('content')  
<div class="col-xs-1 my-3" align="center">
    @if (isset($count))
    <p>Totale annunci inseriti nello slot temporale specificato</p>
    {{ $count }}
    @endif
    <p>Totale richieste fatte dai potenziali locatari</p>
    {{ $count4 }}
    <p>Totale alloggi locati</p>
    {{ $count3 }}
    <p>TOTALE ALLOGGI</p>
    {{ $count5 }}
</div>

@endsection
