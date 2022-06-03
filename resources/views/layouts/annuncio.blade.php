@isset($annuncio)
@isset($idutente)
<div class="row justify-content-center">
    <div class="card text-black">
        <img src="{{ asset('images/slide1.jpg') }}" class="w-100" />
        <div class="card-body">
            <div class="text-center">
                <h5 class="card-title">{{ $annuncio->nomeannuncio }}</h5>
                <p class="text-muted mb-4">{{ $annuncio->descrizione }}</p>
            </div>
            <div>
                <div class="d-flex justify-content-between">
                    @if($annuncio->tipologia==1)
                <div class="d-flex justify-content-between">
                    <span>Posto letto </span>
                </div>
                @endif
                   @if($annuncio->tipologia==0)
                <div class="d-flex justify-content-between">
                    <span>Appartamento</span>
                </div>
                @endif
                
                </div>
                <div class="d-flex justify-content-between">
                    <span>Via:</span><span>{{ $annuncio->via }} {{ $annuncio->numerocivico }}</span>
                </div>
                 <div class="d-flex justify-content-between">
                    <span>Numero civico:</span><span>{{ $annuncio->numerocivico }}</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span>Città:</span><span>{{ $annuncio->citta }}</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span>Cap:</span><span>{{ $annuncio->cap }}</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span>Superficie:</span><span>{{ $annuncio->superficie }} mq</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span>Posti letto Totali Presenti nell'alloggio:</span><span>{{ $annuncio->postiletto }}</span>
                </div>
                 <div class="d-flex justify-content-between">
                    <span>Dal</span><span>{{($annuncio->in_at)}}</span>
                </div>
                 <div class="d-flex justify-content-between">
                    <span>Al</span><span>{{ $annuncio->out_at}}</span>
                </div>
                @if($annuncio->wifi==1)
                <div class="d-flex justify-content-between">
                    <span>WIFI disponibile</span>
                </div>
                @endif
                @if($annuncio->numeroletticamera!=-1)
                <div class="d-flex justify-content-between">
                   <span>Numero letti camera</span><span>{{ $annuncio->numeroletticamera }}</span>
                </div>
                @endif
                @if($annuncio->angolostudio==1)
                <div class="d-flex justify-content-between">
                    <span>angolostudio disponibile</span>
                </div>
                @endif
                 @if($annuncio->climatizzatore==1)
                <div class="d-flex justify-content-between">
                    <span>climatizzatore disponibile</span>
                </div>
                  @if($annuncio->lavatrice==1)
                <div class="d-flex justify-content-between">
                    <span>lavatrice disponibile</span>
                </div>
                @endif
                 @if($annuncio->lavastov==1)
                <div class="d-flex justify-content-between">
                    <span>Lavastoviglie disponibile</span>
                </div>
                 @endif
                @endif
                 @if($annuncio->genere==1)
                <div class="d-flex justify-content-between">
                    <span>Maschio</span>
                </div>@endif
                 @if($annuncio->genere==0)
                <div class="d-flex justify-content-between">
                    <span>Femmina</span>
                </div>@endif
                <div class="d-flex justify-content-between">
                    <span>Eta min:</span><span>{{ $annuncio->etamin}}</span>
                </div>
               <div class="d-flex justify-content-between">
                    <span>Età max:</span><span>{{ $annuncio->etamax}}</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span>Utenze presenti:</span><span>{{ $annuncio->utenze }}</span>
                </div>
                @if($annuncio->tipo_stanza==2)
                <div class="d-flex justify-content-between">
                    <span>Stanza Matrimoniale</span>
                </div>
                @endif
                @if($annuncio->tipo_stanza==1)
                 <div class="d-flex justify-content-between">
                    <span>Stanza Singola</span>
                </div>
                @endif
                @if($annuncio->numerototalicamere!=-1)
                <div class="d-flex justify-content-between">
                    <span>Numero totali camere:</span><span>{{ $annuncio->numerototalicamere }}</span>
                </div>
                @endif
                @if($annuncio->cucina==1)
                <div class="d-flex justify-content-between">
                    <span>Cucina Presente</span>
                </div>
                @endif
                 @if($annuncio->parcheggio==1)
                <div class="d-flex justify-content-between">
                    <span>Parcheggio Presente</span>
                </div>
                @endif
                 @if($annuncio->localericrativo==1)
                <div class="d-flex justify-content-between">
                    <span>Locale ricreativo presente</span>
                </div>
                @endif
                 
                
                
                
                
            </div>
            <div class="d-flex justify-content-between total font-weight-bold mt-4">
                <span>Canone Affitto:</span><span>€{{ $annuncio->canoneaffitto }}</span>
            </div>
            
            @can('isLocatore')
            @if($idutente ==  Auth::user()->id)
            <div class="d-flex flex-column px-2 mt-4">
                <a href = "{{ route('annuncio', [$annuncio->idannuncio]) }}" class="btn btn-primary btn-sm" type="button">Modifica</a>
            </div>
            <div class="d-flex flex-column px-2 mt-4">
                <a href = "{{ route('annuncio', [$annuncio->idannuncio]) }}" class="btn btn-danger btn-sm" type="button">Elimina</a>
            </div>
            @endif
            @endcan
        </div>
    </div>
</div>
@endisset()
@endisset()