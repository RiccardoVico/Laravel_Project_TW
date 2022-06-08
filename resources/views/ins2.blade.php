
@extends('layouts.locatario')

@section('title', 'Home')

@section('header')

@endsection
@section('content')
<div class="col">
<div class="page-section" >
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
                    {{ Form::open(array('route' => 'inserimentoann', 'id' => 'add', 'files' => true, 'class' => 'contact-form')) }}
                        <h3>Inserisci il tuo annuncio</h3>
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
                        {{ Form::label('nomeannuncio', 'nomeannuncio', ['class' => 'label-input']) }}
                        {{ Form::text('nomeannuncio','', ['class' => 'input','id' => 'nomeannuncio']) }}
                        @if ($errors->first('nomeannuncio'))
                            <ul class="errors">
                            @foreach ($errors->get('nomeannuncio') as $message)
                              <li>{{ $message }}</li>
                            @endforeach
                            </ul>
                        @endif
                        {{ Form::label('canoneaffitto', 'canoneaffitto', ['class' => 'label-input']) }}
                        {{ Form::text('canoneaffitto','', ['class' => 'input','id' => 'canoneaffitto']) }}
                        @if ($errors->first('canoneaffitto'))
                            <ul class="errors">
                            @foreach ($errors->get('canoneaffitto') as $message)
                               <li>{{ $message }}</li>
                            @endforeach
                            </ul>
                        @endif
                        {{ Form::label('cap', 'cap', ['class' => 'label-input']) }}
                        {{ Form::text('cap','', ['class' => 'input','id' => 'cap']) }}
                        @if ($errors->first('cap'))
                            <ul class="errors">
                            @foreach ($errors->get('cap') as $message)
                               <li>{{ $message }}</li>
                            @endforeach
                            </ul>
                        @endif
						
			{{ Form::label('numerocivico', 'numerocivico', ['class' => 'label-input']) }}
                        {{ Form::text('numerocivico','', ['class' => 'input','id' => 'numerocivico']) }}
                        @if ($errors->first('numerocivico'))
                            <ul class="errors">
                            @foreach ($errors->get('numerocivico') as $message)
                               <li>{{ $message }}</li>
                            @endforeach
                            </ul>
                        @endif
						
	                {{ Form::label('citta', 'citta', ['class' => 'label-input']) }}
                        {{ Form::text('citta','', ['class' => 'input','id' => 'citta']) }}
                         @if ($errors->first('citta'))
                            <ul class="errors">
                            @foreach ($errors->get('citta') as $message)
                               <li>{{ $message }}</li>
                            @endforeach
                            </ul>
                        @endif
                          
                        {{ Form::label('superficie', 'superficie', ['class' => 'label-input']) }}
                        {{ Form::text('superifice','', ['class' => 'input','id' => 'superficie']) }}
                         @if ($errors->first('superficie'))
                            <ul class="errors">
                            @foreach ($errors->get('superficie') as $message)
                               <li>{{ $message }}</li>
                            @endforeach
                            </ul>
                        @endif
                        {{ Form::label('postilettototali', 'postilettototali', ['class' => 'label-input']) }}
                        {{ Form::text('postilettototali','', ['class' => 'input','id' => 'postilettototali']) }}
                         @if ($errors->first('postilettototali'))
                            <ul class="errors">
                            @foreach ($errors->get('postilettototali') as $message)
                               <li>{{ $message }}</li>
                            @endforeach
                            </ul>
                        @endif
                        {{ Form::label('etamin', 'etamin', ['class' => 'label-input']) }}
                        {{ Form::number('etamin','', ['class' => 'input','id' => 'etamin']) }}
                         @if ($errors->first('etamin'))
                            <ul class="errors">
                            @foreach ($errors->get('etamin') as $message)
                               <li>{{ $message }}</li>
                            @endforeach
                            </ul>
                        @endif
					
		        {{ Form::label('etamax', 'etamax', ['class' => 'label-input']) }}
                        {{ Form::number('etamax','', ['class' => 'input','id' => 'etamax']) }}
                         @if ($errors->first('etamax'))
                            <ul class="errors">
                            @foreach ($errors->get('etamax') as $message)
                               <li>{{ $message }}</li>
                            @endforeach
                            </ul>
                        @endif
                                                 	
                        {{ Form::label('descrizione', 'descrizione', ['class' => 'label-input']) }}
                        {{ Form::text('descrizione','', ['class' => 'input','id' => 'descrizione']) }}
                         @if ($errors->first('descrizione'))
                            <ul class="errors">
                            @foreach ($errors->get('descrizione') as $message)
                               <li>{{ $message }}</li>
                            @endforeach
                            </ul>
                        @endif
		       {{ Form::label('utenze', 'utenze', ['class' => 'label-input']) }}
                       {{ Form::text('utenze','', ['class' => 'input','id' => 'utenze']) }}
                        @if ($errors->first('utenze'))
                            <ul class="errors">
                            @foreach ($errors->get('utenze') as $message)
                               <li>{{ $message }}</li>
                            @endforeach
                            </ul>
                        @endif
			{{ Form::label('via', 'via', ['class' => 'label-input']) }}
                        {{ Form::text('via','', ['class' => 'input','id' => 'via']) }}
                         @if ($errors->first('via'))
                            <ul class="errors">
                            @foreach ($errors->get('via') as $message)
                               <li>{{ $message }}</li>
                            @endforeach
                            </ul>
                        @endif
		       {{ Form::label('in_at', 'in_at', ['class' => 'label-input']) }}
                       {{ Form::date('in_at','', ['class' => 'input','id' => 'in_at']) }}
                        @if ($errors->first('in_at'))
                            <ul class="errors">
                            @foreach ($errors->get('in_at') as $message)
                               <li>{{ $message }}</li>
                            @endforeach
                            </ul>
                        @endif
		       {{ Form::label('out_at', 'out_at', ['class' => 'label-input']) }}
                       {{ Form::date('out_at','', ['class' => 'input','id' => 'out_at']) }}
                        @if ($errors->first('out_at'))
                            <ul class="errors">
                            @foreach ($errors->get('out_at') as $message)
                               <li>{{ $message }}</li>
                            @endforeach
                            </ul>
                        @endif
					        {{ Form::label('wifi', 'wifi  non presente', ['class' => 'label-input']) }}
                                                {{ Form::radio('wifi', '0', ['class' => 'input','id' => 'wifi']) }}
                                                {{ Form::label('wifi', 'wifi  presente', ['class' => 'label-input']) }}
                                                {{ Form::radio('wifi', '0', ['class' => 'input','id' => 'wifi']) }}
                                                {{ Form::label('climatizzatore', 'climatizzatore non presente', ['class' => 'label-input']) }}
                                                {{ Form::radio('climatizzatore', '0', ['class' => 'input','id' => 'climatizzatore']) }}
                                                {{ Form::label('climatizzatore', ' climatizzatore presente', ['class' => 'label-input']) }}
                                                {{ Form::radio('climatizzatore', '1', ['class' => 'input','id' => 'climatizzatore']) }}
                                                {{ Form::label('balcone', ' balcone presente', ['class' => 'label-input']) }}
                                                {{ Form::radio('balcone', '1', ['class' => 'input','id' => 'balcone']) }}
                                                {{ Form::label('balcone', ' balcone non presente', ['class' => 'label-input']) }}
                                                {{ Form::radio('balcone', '0', ['class' => 'input','id' => 'balcone']) }}
                                                <br>
                                                {{ Form::label('image', 'image', ['class' => 'label-input']) }}
                                                {{ Form::file('image', ['class' => 'input', 'id' => 'image']) }}
                                                  @if ($errors->first('image'))
                                                   <ul class="errors">
                                                   @foreach ($errors->get('image') as $message)
                                                    <li>{{ $message }}</li>
                                                   @endforeach
                                                   </ul>
                                                 @endif
                                                
                                    
   
                        <div class="filtri_posto_letto">
                            <div class="filtri_scomparsa">
 
                             {{ Form::label('angolostudio', ' angolo studio ', ['class' => 'label-input']) }}
                                                
                                                {{ Form::radio('angolostudio', '0', ['class' => 'input','id' => 'angolostudio']) }}
                                                {{ Form::label('angolostudio', 'no angolostudio', ['class' => 'label-input']) }}
                                                {{ Form::radio('angolostudio', '1', ['class' => 'input','id' => 'angolostudio']) }}<br>
                                                {{ Form::label('tipo_stanza', 'stanza singola', ['class' => 'label-input']) }}
                                                {{ Form::radio('tipo_stanza', '1', ['class' => 'input','id' => 'angolostudio']) }}
                                                {{ Form::label('tipo_stanza', 'stanza matrimoniale', ['class' => 'label-input']) }}
                                                {{ Form::radio('tipo_stanza', '1', ['class' => 'input','id' => 'tipo_stanza']) }}
                                                {{ Form::label('numeroletticamera', 'numeroletticamera', ['class' => 'label-input']) }}
                                                {{ Form::number('numeroletticamera', '', ['class' => 'input','id' => 'numeroletticamera']) }}
                                                 @if ($errors->first('numeroletticamera'))
                                                  <ul class="errors">
                                                   @foreach ($errors->get('numeroletticamera') as $message)
                                                    <li>{{ $message }}</li>
                                                   @endforeach
                                                  </ul>
                                                 @endif
                             <br>
                             
                          <!--      <input type="text" name=""><label>Metri Quadri</label>-->
                            </div>

                            <div class="filtri_comparsa">
                       
                                               
                                                 
                                                {{ Form::label('numerototalecamere', ' numerototalecamere', ['class' => 'label-input']) }}
                                                {{ Form::number('numerototalecamere', '', ['class' => 'input','id' => 'numerototalecamere']) }}
                                                 @if ($errors->first('numerototalecamere'))
                                                  <ul class="errors">
                                                  @foreach ($errors->get('numerototalecamere') as $message)
                                                   <li>{{ $message }}</li>
                                                  @endforeach
                                                  </ul>
                                                 @endif
                                                <br>
                                                {{ Form::label('cucina', ' cucina presente', ['class' => 'label-input']) }}
                                                {{ Form::radio('cucina ', '1', ['class' => 'input','id' => 'cucina']) }}
                                                {{ Form::label('cucina', ' cucina non presente', ['class' => 'label-input']) }}
                                                {{ Form::radio('cucina ', '0', ['class' => 'input','id' => 'cucina']) }}
                                                {{ Form::label('localericreativo', ' localericreativo presente', ['class' => 'label-input']) }}
                                                {{ Form::radio('localericreativo ', '1', ['class' => 'input','id' => 'localericreativo']) }}
                                                {{ Form::label('localericreativo', ' localericreativo non presente', ['class' => 'label-input']) }}
                                                {{ Form::radio('localericreativo ', '0', ['class' => 'input','id' => 'localericreativo']) }}
                                                {{ Form::label('parcheggio', ' parcheggio presente', ['class' => 'label-input']) }}
                                                {{ Form::radio('parcheggio', '1', ['class' => 'input','id' => 'parcheggio']) }}
                                                {{ Form::label('parcheggio', ' parcheggio non presente', ['class' => 'label-input']) }}
                                                {{ Form::radio('parcheggio', '0', ['class' => 'input','id' => 'parcheggio']) }}
                                                
                                                {{ Form::label('lavatrice', 'lavatrice non presente', ['class' => 'label-input']) }}
                                                {{ Form::radio('lavatrice', '0', ['class' => 'input','id' => 'lavatrice']) }}
                                                {{ Form::label('lavatrice', ' lavatrice presente', ['class' => 'label-input']) }}
                                                {{ Form::radio('lavatrice', '1', ['class' => 'input','id' => 'lavatrice']) }}
                                                {{ Form::label('lavastov', 'lavastoviglie non presente', ['class' => 'label-input']) }}
                                                {{ Form::radio('lavastov', '0', ['class' => 'input','id' => 'lavatrice']) }}
                                                {{ Form::label('lavastov', ' lavastoviglie presente', ['class' => 'label-input']) }}
                                                {{ Form::radio('lavastov', '1', ['class' => 'input','id' => 'lavastov']) }}
                                                 
                                            
                                    
                                
                              <br>
                              
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-light">Inserisci</button>
                    {{ Form::close() }}

                </div>
                </div>
            </div>
        </div>
                       
</div></div></div>
    
   @endsection
