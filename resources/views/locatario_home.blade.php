
@extends('layouts.locatario')

@section('title', 'Home')

@section('header')
<div class="page-banner home-banner mb-5">
    <div class="slider-wrapper">
        <div class="owl-carousel hero-carousel">
            <div class="hero-carousel-item">
                <img src="{{  asset('images/loc2.jpg')  }}"" alt="">
                <div class="img-caption">
                    <div class="subhead"></div>
                    <h1 class="mb-4">Benvenuto</h1>
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

            <div class="page-section">
                <div class="container_filtri">
                    <div class="col text-center pb-3">
                        {{ Form::open(array('route' => 'filtraggio1', 'class' => 'contact-form')) }}
                        <h3>Applica filtri</h3>
                        <div class="scelta_tipologia_annuncio">
                            <div class="tipo_annuncio_appartamento">
                                {{ Form::label('tipo_annuncio', 'Appartamento', ['class' => 'label-input']) }}
                                {{ Form::radio('tipo_annuncio', '0', ['class' => 'input','id' => 'tipo_annuncio']) }}
                            </div>
                            <div class="tipo_annuncio_posto_letto">
                                {{ Form::label('tipo_annuncio', 'PostoLetto', ['class' => 'label-input']) }}
                                {{ Form::radio('tipo_annuncio', '1', ['class' => 'input','id' => 'tipo_annuncio']) }}
                            </div>
                        </div>
                        <div class="niente">
                            {{ Form::label('fittizio', 'fittizio', ['class' => 'label-input']) }}
                            {{ Form::text('fittizio', '', ['class' => 'input','id' => 'fittizio']) }}
                             <!-- <input type='text' value="" id="fittizio" nome="fittizio">Tipo_annuncio</input>-->
                        </div>
                      <!--<input type="radio" name="tipo_annuncio" value="Appartamento" checked><label class="mx-2"> Appartamento</label>-->
                       <!-- <input type="radio" name="tipo_annuncio" value="Posto_letto"><label class="mx-2"> Posto Letto</label>
                        <div class="niente">
                            <input type='text' value="" id="fittizio" nome="fittizio">Tipo_annuncio</input>
                        </div>
                        <br>-->
                        <br>
                        <div class="filtri_base">
                            <div class="filtro_details">
                                {{ Form::label('prezzomax', 'Canone affitto Massimo', ['class' => 'label-input']) }}
                                {{ Form::text('prezzomax','', ['class' => 'input','id' => 'prezzomax']) }}

                                @if ($errors->first('prezzomax'))
                                <ul class="errors">
                                    @foreach ($errors->get('prezzomax') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>

                            <div class="filtro_details">
                                {{ Form::label('prezzomin', 'Canone affitto Minimo', ['class' => 'label-input']) }}
                                {{ Form::text('prezzomin', '', ['class' => 'input','id' => 'prezzomin']) }}
                                @if ($errors->first('prezzomin'))
                                <ul class="errors">
                                    @foreach ($errors->get('prezzomin') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>

                            <div class="filtro_details">
                                {{ Form::label('etamin', 'Et?? Locatari Minima', ['class' => 'label-input']) }}
                                {{ Form::number('etamin', '', ['class' => 'input','id' => 'etamin']) }}
                                @if ($errors->first('etamin'))
                                <ul class="errors">
                                    @foreach ($errors->get('etamin') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>

                            <div class="filtro_details">
                                {{ Form::label('etamax', 'Et?? Locatari Massima', ['class' => 'label-input']) }}
                                {{ Form::number('etamax', '', ['class' => 'input','id' => 'etamax']) }}
                                @if ($errors->first('etamax'))
                                <ul class="errors">
                                    @foreach ($errors->get('etamax') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>

                            <div class="filtro_details">
                                {{ Form::label('mydatetime', 'Data Inizio Disponibilit??', ['class' => 'label-input']) }}
                                {{ Form::date('mydatetime', '', ['class' => 'input','id' => 'mydatetime']) }}
                            </div>

                            <div class="filtro_details">
                                {{ Form::label('mydatetime2', 'Data Fine Disponibilit??', ['class' => 'label-input']) }}
                                {{ Form::date('mydatetime2', '', ['class' => 'input','id' => 'mydatetime2']) }}
                            </div>

                            <div class="filtro_details">
                                {{ Form::label('superficie', 'Superficie Minima', ['class' => 'label-input']) }}
                                {{ Form::text('superficie','', ['class' => 'input','id' => 'superficie']) }}
                                @if ($errors->first('superficie'))
                                <ul class="errors">
                                    @foreach ($errors->get('superficie') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>

                            <br>

                            <div class="filtro_details">
                                {{ Form::label('postilettototali', 'Posti Letto Totali Minimi', ['class' => 'label-input']) }}
                                {{ Form::number('postilettototali','', ['class' => 'input','id' => 'postilettototali']) }}

                                @if ($errors->first('postilettototali'))
                                <ul class="errors">
                                    @foreach ($errors->get('postilettototali') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                        <hr>
                        <div class="campi_univoci">
                            <div class="wifi_checkbox">
                                {{ Form::label('wifis', 'Wifi richiesto', ['class' => 'label-input']) }}
                                {{ Form::checkbox('wifis', '1', ['class' => 'input','id' => 'wifis']) }}
                                {{ Form::label('wifin', 'Wifi non richiesto', ['class' => 'label-input']) }}
                                {{ Form::checkbox('wifin', '0', ['class' => 'input','id' => 'wifin']) }}
                            </div>

                            <div class="balcone_checkbox">
                                {{ Form::label('balcones', 'Balcone richiesto', ['class' => 'label-input']) }}
                                {{ Form::checkbox('balcones', '1', ['class' => 'input','id' => 'balcones']) }}
                                {{ Form::label('balconen', 'Balcone non richiesto', ['class' => 'label-input']) }}
                                {{ Form::checkbox('balconen', '0', ['class' => 'input','id' => 'balconen']) }}
                            </div>
                        </div>
                        <hr>
                        <div class="filtri_avanzati">
                            <div class="filtri_posto_letto">
                                <div class="camere">
                                    {{ Form::label('tipostanzas', 'Camera Singola', ['class' => 'label-input']) }}
                                    {{ Form::checkbox('tipostanzas', '1', ['class' => 'input','id' => 'tipostanzas']) }}
                                    {{ Form::label('tipostanzad', 'Camera Doppia', ['class' => 'label-input']) }}
                                    {{ Form::checkbox('tipostanzad', '2', ['class' => 'input','id' => 'tipostanzad']) }}
                                </div>
                                {{ Form::label('letticamera', 'Letti nella camera', ['class' => 'label-input']) }}
                                {{ Form::number('letticamera','', ['class' => 'input','id' => 'letticamera']) }}

                                @if ($errors->first('letticamera'))
                                <ul class="errors">
                                    @foreach ($errors->get('letticamera') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @endif
                                <div class="angolo_studio">
                                    {{ Form::label('angolostudion', 'Angolo Studio non richiesto', ['class' => 'label-input']) }}
                                    {{ Form::checkbox('angolostudion', '0', ['class' => 'input','id' => 'angolostudion']) }}
                                    {{ Form::label('angolostudios', 'Angolo Studio richiesto', ['class' => 'label-input']) }}
                                    {{ Form::checkbox('angolostudios', '1', ['class' => 'input','id' => 'angolostudios']) }}
                                </div>
                             <!--      <input type="text" name=""><label>Metri Quadri</label>-->
                            </div>

                            <div class="filtri_appartamento">
                                {{ Form::label('numerocamere', 'Numero Camere Minimo', ['class' => 'label-input']) }}
                                {{ Form::number('numerocamere', '', ['class' => 'input','id' => 'numerocamere']) }}

                                @if ($errors->first('numerocamere'))
                                <ul class="errors">
                                    @foreach ($errors->get('numerocamere') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @endif
                                <br>
                                <div class="cucina">
                                    {{ Form::label('cucinan', 'Cucina non richiesta', ['class' => 'label-input']) }}
                                    {{ Form::checkbox('cucinan', '0', ['class' => 'input','id' => 'cucinan']) }}
                                    {{ Form::label('cucinas', 'Cucina richiesta', ['class' => 'label-input']) }}
                                    {{ Form::checkbox('cucinas', '1', ['class' => 'input','id' => 'cucinas']) }}
                                </div>

                                <div class="locale_ricreativo">
                                    {{ Form::label('localern', 'Locale ricreativo non richiesto', ['class' => 'label-input']) }}
                                    {{ Form::checkbox('localern', '0', ['class' => 'input','id' => 'localern']) }}
                                    {{ Form::label('localers', 'Locale ricreativo richiesto', ['class' => 'label-input']) }}
                                    {{ Form::checkbox('localers', '1', ['class' => 'input','id' => 'localers']) }}
                                </div>

                                <div class="lavatrice">
                                    {{ Form::label('lavatricen', 'Lavatrice non richiesta', ['class' => 'label-input']) }}
                                    {{ Form::checkbox('lavatricen', '0', ['class' => 'input','id' => 'lavatricen']) }}
                                    {{ Form::label('lavatrices', 'Lavatrice  richiesta', ['class' => 'label-input']) }}
                                    {{ Form::checkbox('lavatrices', '1', ['class' => 'input','id' => 'lavatrices']) }}
                                </div>

                                <div class="lavastoviglie">
                                    {{ Form::label('lavastovn', 'Lavastoviglie non richiesta', ['class' => 'label-input']) }}
                                    {{ Form::checkbox('lavastovn', '0', ['class' => 'input','id' => 'lavastovn']) }}
                                    {{ Form::label('lavastovs', 'Lavastoviglie richiesta', ['class' => 'label-input']) }}
                                    {{ Form::checkbox('lavastovs', '1', ['class' => 'input','id' => 'lavastovs']) }}
                                </div>
                            </div>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-outline-light">Filtra</button>
                        {{ Form::close() }}
                        <a href = "{{ route('home_locatario') }}" class="mt-4 btn btn-outline-light" type="button">Elimina Filtri</a>

                        

                    </div>
                </div>
            </div>

                <div class="container">
                    <div class="col text-center pb-3">
                        @isset($annunci)
                        <h1>Catalogo Annunci Disponibili</h1>
                        @else
                        <h1>Non ?? stato trovato nessun annuncio</h1>
                        @endisset()
                    </div>
                    @include('layouts/catalogo')
                </div>

        </div>
    </div>
</div>

@endsection


