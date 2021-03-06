@extends('layouts.locatore')

@section('title', 'Home')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/registration_form.css') }}">
<div class="page-section" style="background-color:#E6E6FA">
    <div class="container">
        <div class="h3">InserisciAnnuncio</div>
        {{ Form::open(array('route' => 'store_annuncio', 'id' => 'add_annuncio', 'files' => true, 'class' => 'contact-form')) }}
        <div class="annuncio-details">
            <div class="form-row">
                <div class="input-box">
                    {{ Form::label('nomeannuncio', 'Nome Annuncio', ['class' => 'label-input']) }}
                    {{ Form::text('nomeannuncio', '', ['class' => 'input','id' => 'nomeannuncio']) }}
                    @if ($errors->first('nomeannuncio'))
                    <ul class="errors">
                        @foreach ($errors->get('nomeannuncio') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>

                <div class="input-box">
                    {{ Form::label('canoneaffitto', 'Canone Affitto', ['class' => 'label-input']) }}
                    {{ Form::text('canoneaffitto','', ['class' => 'input','id' => 'canoneaffitto']) }}
                    @if ($errors->first('canoneaffitto'))
                    <ul class="errors">
                        @foreach ($errors->get('canoneaffitto') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>

                <div class="input-box_scelta">
                    {{ Form::label('tipologia', 'Tipologia', ['class' => 'label-input']) }}
                    {{-- {{ Form::select('tipologia', ['0' => 'Appartamento', '1' => 'Posto Letto'], 0, ['class' => 'input form-control','id' => 'tipologia']) }} --}}
                    <div class="tipologia_inserimento_annuncio">
                        {{ Form::label('tipo_annuncio', 'Appartamento', ['class' => 'label-input']) }}
                        {{ Form::radio('tipologia', '0',true, ['class' => 'input','id' => 'tipologia']) }}
                        {{ Form::label('tipo_annuncio', 'PostoLetto', ['class' => 'label-input']) }}
                        {{ Form::radio('tipologia', '1',false, ['class' => 'input','id' => 'tipologia']) }}
                    </div>
                </div>

                <div class="input-box">
                    {{ Form::label('citta', 'Citt??', ['class' => 'label-input']) }}
                    {{ Form::text('citta','', ['class' => 'input','id' => 'citta']) }}
                    @if ($errors->first('citta'))
                    <ul class="errors">
                        @foreach ($errors->get('citta') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>

                <div class="input-box">
                    {{ Form::label('via', 'Via', ['class' => 'label-input']) }}
                    {{ Form::text('via','', ['class' => 'input','id' => 'via']) }}
                    @if ($errors->first('via'))
                    <ul class="errors">
                        @foreach ($errors->get('via') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>

                <div class="input-box">
                    {{ Form::label('numerocivico', 'Numero Civico', ['class' => 'label-input']) }}
                    {{ Form::text('numerocivico','', ['class' => 'input','id' => 'numerocivico']) }}
                    @if ($errors->first('numerocivico'))
                    <ul class="errors">
                        @foreach ($errors->get('numerocivico') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                
                <div class="input-box">
                    {{ Form::label('descrizione', 'Descrizione', ['class' => 'label-input']) }}
                    {{ Form::textarea('descrizione', '', ['class' => 'input form-control', 'rows' => 7, 'id' => 'descrizione']) }}
                    @if ($errors->first('descrizione'))
                    <ul class="errors">
                        @foreach ($errors->get('descrizione') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>

                <div class="input-box">
                    {{ Form::label('superficie', 'Superficie', ['class' => 'label-input']) }}
                    {{ Form::text('superficie','', ['class' => 'input','id' => 'superficie']) }}
                    @if ($errors->first('superficie'))
                    <ul class="errors">
                        @foreach ($errors->get('superficie') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>

                <div class="input-box">
                    {{ Form::label('postiletto', 'Posti Letto Totali', ['class' => 'label-input']) }}
                    {{ Form::text('postiletto','', ['class' => 'input','id' => 'postiletto']) }}
                    @if ($errors->first('postiletto'))
                    <ul class="errors">
                        @foreach ($errors->get('postiletto') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>

                <div class="input-box">
                    {{ Form::label('etamin', 'Et?? Minima', ['class' => 'label-input']) }}
                    {{ Form::number('etamin','', ['class' => 'input','id' => 'etamin']) }}
                    @if ($errors->first('etamin'))
                    <ul class="errors">
                        @foreach ($errors->get('etamin') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>

                <div class="input-box">
                    {{ Form::label('etamax', 'Et?? Massima', ['class' => 'label-input']) }}
                    {{ Form::number('etamax','', ['class' => 'input','id' => 'etamax']) }}
                    @if ($errors->first('etamax'))
                    <ul class="errors">
                        @foreach ($errors->get('etamax') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                
                <div class="input-box">
                    {{ Form::label('numerototalicamere', 'Numero Totale Camere', ['class' => 'label-input']) }}
                    {{ Form::text('numerototalicamere','', ['class' => 'input','id' => 'numerototalicamere']) }}
                    @if ($errors->first('numerototalicamere'))
                    <ul class="errors">
                        @foreach ($errors->get('numerototalicamere') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>

                <div class="input-box">
                    {{ Form::label('wifi', 'WiFi', ['class' => 'label-input']) }}
                    {{ Form::select('wifi', ['1' => 'Disponibile', '0' => 'Non Disponibile'], 1, ['class' => 'input form-control','id' => 'wifi']) }}
                </div>

                <div class="input-box">
                    {{ Form::label('climatizzatore', 'Climatizzatore', ['class' => 'label-input']) }}
                    {{ Form::select('climatizzatore', ['1' => 'Disponibile', '0' => 'Non Disponibile'], 1, ['class' => 'input form-control','id' => 'climatizzatore']) }}
                </div>

                <div class="input-box">
                    {{ Form::label('balcone', 'Balcone', ['class' => 'label-input']) }}
                    {{ Form::select('balcone', ['1' => 'Disponibile', '0' => 'Non Disponibile'], 1, ['class' => 'input form-control','id' => 'balcone']) }}
                </div>
                
                <div class="input-box">
                    {{ Form::label('genere', 'Genere', ['class' => 'label-input']) }}
                    {{ Form::select('genere', ['1' => 'Maschio', '0' => 'Femmina', '-1' => 'Nessuna Restrizione'], 1, ['class' => 'input form-control','id' => 'genere']) }}
                </div>

                <div class="input-box">
                    {{ Form::label('cap', 'Cap', ['class' => 'label-input']) }}
                    {{ Form::text('cap','', ['class' => 'input','id' => 'cap']) }}
                    @if ($errors->first('cap'))
                    <ul class="errors">
                        @foreach ($errors->get('cap') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>

                <div class="input-box">
                    {{ Form::label('utenze', 'Utenze', ['class' => 'label-input']) }}
                    {{ Form::text('utenze','', ['class' => 'input','id' => 'utenze']) }}
                    @if ($errors->first('utenze'))
                    <ul class="errors">
                        @foreach ($errors->get('utenze') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>

                <div class="input-box">
                    {{ Form::label('in_at', 'in_at', ['class' => 'label-input']) }}
                    {{ Form::date('in_at','', ['class' => 'input form-control','id' => 'in_at']) }}
                    @if ($errors->first('in_at'))
                    <ul class="errors">
                        @foreach ($errors->get('in_at') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>

                <div class="input-box">
                    {{ Form::label('out_at', 'out_at', ['class' => 'label-input']) }}
                    {{ Form::date('out_at','', ['class' => 'input form-control','id' => 'out_at']) }}
                    @if ($errors->first('out_at'))
                    <ul class="errors">
                        @foreach ($errors->get('out_at') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                
                <div class="input-box5">
                    {{ Form::label('angolostudio', 'Angolo Studio', ['class' => 'label-input']) }}
                    {{ Form::select('angolostudio', ['1' => 'Disponibile', '0' => 'Non Disponibile'], 1, ['class' => 'input form-control','id' => 'angolostudio']) }}
                </div>
                
                <div class="input-box5">
                    {{ Form::label('tipo_stanza', 'Tipo stanza', ['class' => 'label-input']) }}
                    {{ Form::select('tipo_stanza', ['1' => 'Singola', '0' => 'Matrimoniale'], 1, ['class' => 'input form-control','id' => 'tipo_stanza']) }}
                </div>
                
                <div class="input-box5">
                    {{ Form::label('numeroletticamera', 'Numero letti nella camera', ['class' => 'label-input']) }}
                    {{ Form::select('numeroletticamera', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6',], 1, ['class' => 'input form-control','id' => 'cucina']) }}
                </div>
                
                <div class="input-box7">
                    {{ Form::label('cucina', 'Cucina', ['class' => 'label-input']) }}
                    {{ Form::select('cucina', ['1' => 'Disponibile', '0' => 'Non Disponibile'], 1, ['class' => 'input form-control','id' => 'cucina']) }}
                </div>
                
                <div class="input-box7">
                    {{ Form::label('localericreativo', 'Locale Ricreativo', ['class' => 'label-input']) }}
                    {{ Form::select('localericreativo', ['1' => 'Disponibile', '0' => 'Non Disponibile'], 1, ['class' => 'input form-control','id' => 'localericreativo']) }}
                </div>
                
                <div class="input-box7">
                    {{ Form::label('parcheggio', 'Parcheggio', ['class' => 'label-input']) }}
                    {{ Form::select('parcheggio', ['1' => 'Disponibile', '0' => 'Non Disponibile'], 1, ['class' => 'input form-control','id' => 'parcheggio']) }}
                </div>
                
                <div class="input-box7">
                    {{ Form::label('lavatrice', 'Lavatrice', ['class' => 'label-input']) }}
                    {{ Form::select('lavatrice', ['1' => 'Disponibile', '0' => 'Non Disponibile'], 1, ['class' => 'input form-control','id' => 'lavatrice']) }}
                </div>
                
                <div class="input-box7">
                    {{ Form::label('lavastov', 'Lavastoviglie', ['class' => 'label-input']) }}
                    {{ Form::select('lavastov', ['1' => 'Disponibile', '0' => 'Non Disponibile'], 1, ['class' => 'input form-control','id' => 'lavastov']) }}
                </div>
                
                <div class="input-box">
                    {{ Form::label('image', 'Immagine', ['class' => 'label-input']) }}
                    {{ Form::file('image', ['class' => 'input','id' => 'image']) }}
                </div>
                <div class="input-box6">
                    {{ Form::label('fitto', 'Tipologia', ['class' => 'label-input']) }}
                    {{ Form::text('fitto','', ['class' => 'input','id' => 'fitto']) }}
                </div>

                <div class="container-form-btn input-box"> 
                    {{ Form::label('', '', ['class' => 'label-input']) }}
                    {{ Form::submit('Aggiungi Annuncio', ['class' => 'form-btn1']) }}
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection