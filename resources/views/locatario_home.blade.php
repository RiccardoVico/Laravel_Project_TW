
@extends('layouts.locatario')

@section('title', 'Home')

@section('header')
<div class="page-banner home-banner mb-5">
    <div class="slider-wrapper">
        <div class="owl-carousel hero-carousel">
            <div class="hero-carousel-item">
                <img src="images/loc2.jpg" alt="">
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
  
          <!-- <h5> Opzioni filtraggio</h5>
{{ Form::open(array('route' => 'filtraggio1', 'class' => 'contact-form')) }}
  Tipologia appartamento<br>
   {{ Form::label('tipo', 'Appartamento', ['class' => 'label-input']) }}
   {{ Form::radio('tipo', '0', ['class' => 'input','id' => 'tipo']) }}
   {{ Form::label('tipo', 'PostoLetto', ['class' => 'label-input']) }}
   {{ Form::radio('tipo', '1', ['class' => 'input','id' => 'tipo']) }}
   <br>
   {{ Form::label('prezzomax', 'prezzomax', ['class' => 'label-input']) }}
   {{ Form::text('prezzomax','', ['class' => 'input','id' => 'prezzomax']) }}
   {{ Form::label('prezzomin', 'prezzomin', ['class' => 'label-input']) }}
   {{ Form::text('prezzomin', '', ['class' => 'input','id' => 'prezzomin']) }}
   <br>
   {{ Form::label('mydatetime', 'DataInizio', ['class' => 'label-input']) }}
   {{ Form::date('mydatetime', '', ['class' => 'input','id' => 'mydatetime']) }}
    {{ Form::label('mydatetime2', 'DataFine', ['class' => 'label-input']) }}
   {{ Form::date('mydatetime2', '', ['class' => 'input','id' => 'mydatetime2']) }}
   <br>
    {{ Form::label('postiletto', 'postiletto', ['class' => 'label-input']) }}
   {{ Form::text('postiletto', '', ['class' => 'input','id' => 'postiletto']) }}
    
                 {{ Form::submit('Filtra', ['class' => 'form-btn1']) }}
            
            
            {{ Form::close() }}-->
            

<div class="page-section">
            <div class="container_filtri">
                <div class="col text-center pb-3">
                   {{ Form::open(array('route' => 'filtraggio1', 'class' => 'contact-form')) }}
                        <h3>Applica filtri</h3>
                       {{ Form::label('tipo_annuncio', 'Appartamento', ['class' => 'label-input']) }}
                       {{ Form::radio('tipo_annuncio', '0', ['class' => 'input','id' => 'tipo_annuncio']) }}
                       {{ Form::label('tipo_annuncio', 'PostoLetto', ['class' => 'label-input']) }}
                       {{ Form::radio('tipo_annuncio', '1', ['class' => 'input','id' => 'tipo_annuncio']) }}
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
                        {{ Form::label('prezzomax', 'prezzomax', ['class' => 'label-input']) }}
                        {{ Form::text('prezzomax','', ['class' => 'input','id' => 'prezzomax']) }}
                        
                        @if ($errors->first('prezzomax'))
                        <ul class="errors">
                        @foreach ($errors->get('prezzomax') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                        </ul>
                            @endif
                        
                        {{ Form::label('prezzomin', 'prezzomin', ['class' => 'label-input']) }}
                        {{ Form::text('prezzomin', '', ['class' => 'input','id' => 'prezzomin']) }}
                       
                         
                         @if ($errors->first('prezzomin'))
                         <ul class="errors">
                         @foreach ($errors->get('prezzomin') as $message)
                         <li>{{ $message }}</li>
                         @endforeach
                         </ul>
                            @endif
                        {{ Form::label('etamin', 'etamin', ['class' => 'label-input']) }}
                        {{ Form::number('etamin', '', ['class' => 'input','id' => 'etamin']) }}
                        @if ($errors->first('etamin'))
                         <ul class="errors">
                         @foreach ($errors->get('etamin') as $message)
                         <li>{{ $message }}</li>
                         @endforeach
                         </ul>
                            @endif
                         {{ Form::label('etamax', 'etamax', ['class' => 'label-input']) }}
                        {{ Form::number('etamax', '', ['class' => 'input','id' => 'etamax']) }}
                        @if ($errors->first('etamax'))
                         <ul class="errors">
                         @foreach ($errors->get('etamax') as $message)
                         <li>{{ $message }}</li>
                         @endforeach
                         </ul>
                            @endif
                       
                        {{ Form::label('mydatetime', 'DataInizio', ['class' => 'label-input']) }}
                        {{ Form::date('mydatetime', '', ['class' => 'input','id' => 'mydatetime']) }}
                        {{ Form::label('mydatetime2', 'DataFine', ['class' => 'label-input']) }}
                        {{ Form::date('mydatetime2', '', ['class' => 'input','id' => 'mydatetime2']) }}
                        {{ Form::label('superficie', 'superficie', ['class' => 'label-input']) }}
                        {{ Form::text('superficie','', ['class' => 'input','id' => 'superficie']) }}
                        
                        @if ($errors->first('superficie'))
                        <ul class="errors">
                        @foreach ($errors->get('superficie') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                        </ul>
                            @endif
                            <br>
                        {{ Form::label('postilettototali', 'postilettototali', ['class' => 'label-input']) }}
                        {{ Form::number('postilettototali','', ['class' => 'input','id' => 'postilettototali']) }}
                        
                        @if ($errors->first('postilettototali'))
                        <ul class="errors">
                        @foreach ($errors->get('postilettototali') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                        </ul>
                            @endif
                            <br>
                        {{ Form::label('wifis', 'wifi richiesto', ['class' => 'label-input']) }}
                        {{ Form::checkbox('wifis', '1', ['class' => 'input','id' => 'wifis']) }}
                        {{ Form::label('wifin', 'wifi non richiesto', ['class' => 'label-input']) }}
                        {{ Form::checkbox('wifin', '0', ['class' => 'input','id' => 'wifin']) }}
                        {{ Form::label('balcones', 'balcone richiesto', ['class' => 'label-input']) }}
                        {{ Form::checkbox('balcones', '1', ['class' => 'input','id' => 'balcones']) }}
                        {{ Form::label('balconen', 'balcone non richiesto', ['class' => 'label-input']) }}
                        {{ Form::checkbox('balconen', '0', ['class' => 'input','id' => 'balconen']) }}
                        <div class="filtri_posto_letto">
                            <div class="filtri_scomparsa">
                             {{ Form::label('tipostanzas', 'CameraSingola', ['class' => 'label-input']) }}
                             {{ Form::checkbox('tipostanzas', '1', ['class' => 'input','id' => 'tipostanzas']) }}
                             {{ Form::label('tipostanzad', 'CameraDoppia', ['class' => 'label-input']) }}
                             {{ Form::checkbox('tipostanzad', '2', ['class' => 'input','id' => 'tipostanzad']) }}
                             {{ Form::label('letticamera', 'letti nella camera', ['class' => 'label-input']) }}
                             {{ Form::number('letticamera','', ['class' => 'input','id' => 'letticamera']) }}
                             
                        @if ($errors->first('letticamera'))
                        <ul class="errors">
                        @foreach ($errors->get('letticamera') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                        </ul>
                            @endif
                            <br> <br>
                             {{ Form::label('angolostudion', 'angolostudiononrichiesto', ['class' => 'label-input']) }}
                             {{ Form::checkbox('angolostudion', '0', ['class' => 'input','id' => 'angolostudion']) }}
                             {{ Form::label('angolostudios', 'angolostudio  richiesto', ['class' => 'label-input']) }}
                             {{ Form::checkbox('angolostudios', '1', ['class' => 'input','id' => 'angolostudios']) }}
                          <!--      <input type="text" name=""><label>Metri Quadri</label>-->
                            </div>

                            <div class="filtri_comparsa">
                              {{ Form::label('numerocamere', 'numerocamere', ['class' => 'label-input']) }}
                              {{ Form::number('numerocamere', '', ['class' => 'input','id' => 'numerocamere']) }}
                              
                               @if ($errors->first('numerocamere'))
                                <ul class="errors">
                               @foreach ($errors->get('numerocamere') as $message)
                              <li>{{ $message }}</li>
                              @endforeach
                              </ul>
                              @endif
                              <br>
                              {{ Form::label('cucinan', 'cucina non richiesta', ['class' => 'label-input']) }}
                              {{ Form::checkbox('cucinan', '0', ['class' => 'input','id' => 'cucinan']) }}
                              {{ Form::label('cucinas', 'cucina richiesta', ['class' => 'label-input']) }}
                              {{ Form::checkbox('cucinas', '1', ['class' => 'input','id' => 'cucinas']) }}
                              {{ Form::label('localern', 'locale ricreativo non richiesto', ['class' => 'label-input']) }}
                              {{ Form::checkbox('localern', '0', ['class' => 'input','id' => 'localern']) }}
                              {{ Form::label('localers', 'locale ricreativo richiesto', ['class' => 'label-input']) }}
                              {{ Form::checkbox('localers', '1', ['class' => 'input','id' => 'localers']) }}
                              {{ Form::label('lavatricen', 'lavatrice non richiesta', ['class' => 'label-input']) }}
                              {{ Form::checkbox('lavatricen', '0', ['class' => 'input','id' => 'lavatricen']) }}
                               {{ Form::label('lavatrices', 'lavatrice  richiesta', ['class' => 'label-input']) }}
                              {{ Form::checkbox('lavatrices', '1', ['class' => 'input','id' => 'lavatrices']) }}
                              {{ Form::label('lavastovn', 'lavastoviglie non richiesta', ['class' => 'label-input']) }}
                              {{ Form::checkbox('lavastovn', '0', ['class' => 'input','id' => 'lavastovn']) }}
                              {{ Form::label('lavastovs', 'lavastoviglie richiesta', ['class' => 'label-input']) }}
                              {{ Form::checkbox('lavastovs', '1', ['class' => 'input','id' => 'lavastovs']) }}
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-light">Filtra</button>
                    {{ Form::close() }}

                   
                </div>
            </div>
        </div>
                       
<div class="page-section">
    <div class="container">
        <div class="col text-center pb-3">
            <h1>Catalogo completo annunci disponibili</h1>
        </div>
        @include('layouts/catalogo')
    </div>
</div></div></div></div>
    
   @endsection


