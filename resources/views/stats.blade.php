@extends('layouts.admin')

@section('title', 'Stats')


@section('content')
<div class="page-section">
    <div class="container"> 
        <div class="col-xs-1 my-3" align="center">
            <h5> Opzioni filtraggio</h5>
            {{ Form::open(array('route' => 'statistiche', 'class' => 'contact-form')) }}
            Tipologia appartamento<br>
            {{ Form::label('tipoa', 'Appartamento', ['class' => 'label-input']) }}
            {{ Form::checkbox('tipoa', '0', ['class' => 'input','id' => 'tipoa']) }}
            {{ Form::label('tipop', 'PostoLetto', ['class' => 'label-input']) }}
            {{ Form::checkbox('tipop', '1', ['class' => 'input','id' => 'tipop']) }}
            <br>
            {{ Form::label('mydatetime', 'DataInizio', ['class' => 'label-input']) }}
            {{ Form::date('mydatetime', '', ['class' => 'input','id' => 'mydatetime']) }}
            {{ Form::label('mydatetime2', 'DataFine', ['class' => 'label-input']) }}
            {{ Form::date('mydatetime2', '', ['class' => 'input','id' => 'mydatetime2']) }}

            {{ Form::submit('Filtra', ['class' => 'form-btn1']) }}

            {{ Form::close() }}
        </div>

        <div class="col-xs-1 my-3" align="center">
            <p>Totale annunci presenti nel sito</p>
            {{ $count }}
            <p> Totale offerte di locazione fatte dai potenziali locatari<p>
                {{ $count3 }}
            <p>Totale alloggi locati</p>
            {{ $count4 }}
        </div>
    </div>
</div>
@endsection

