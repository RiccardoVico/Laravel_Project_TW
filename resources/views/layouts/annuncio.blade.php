@isset($annuncio)
@isset($idutente)
<div class="row justify-content-center">
    <div class="col-auto mb-3 w-75">
        <div class="card text-black">
            @isset($foto)
            @if($foto->descrizione != "default")
            <img src="{{ asset('images/annunci/' . $foto->descrizione) }}" class="w-100" />
            @else
            <img src="{{ asset('images/annunci/no-image.png') }}" class="w-100" /> 
            @endif
            @endisset()
            <div class="card-body">
                <div class="text-center">
                    <h5 class="card-title">{{ $annuncio->nomeannuncio }}</h5>
                    <p class="text-muted mb-4">{{ $annuncio->descrizione }}</p>
                    @if($annuncio->disponibilita==0)
                    <div class="badge badge-danger text-wrap">
                        <h3>L'offerta è già stata assegnata</h3>
                    </div>
                    @endif
                </div>
                <div>
                    <div class="d-flex justify-content-between">
                        @if($annuncio->tipologia==1)
                        <span>Tipologia:</span><span>Posto Letto</span>
                        @endif
                        @if($annuncio->tipologia==0)
                        <span>Tipologia:</span><span>Appartamento</span>
                        @endif

                    </div>
                    <div class="d-flex justify-content-between">
                        <span>Via:</span><span>{{ $annuncio->via }} {{ $annuncio->numerocivico }}</span>
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
                        <span>Posti letto totali presenti nell'alloggio:</span><span>{{ $annuncio->postiletto }}</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span>Disponibile dal:</span><span>{{($annuncio->in_at)}}</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span>Disponibile fino al:</span><span>{{ $annuncio->out_at}}</span>
                    </div>
                    @if($annuncio->wifi==1)
                    <div class="d-flex justify-content-between">
                        <span>WIFI disponibile</span>
                    </div>
                    @endif
                    @if($annuncio->numeroletticamera!=-1)
                    <div class="d-flex justify-content-between">
                        <span>Numero letti camera:</span><span>{{ $annuncio->numeroletticamera }}</span>
                    </div>
                    @endif
                    @if($annuncio->angolostudio==1)
                    <div class="d-flex justify-content-between">
                        <span>Angolo studio disponibile</span>
                    </div>
                    @endif
                    @if($annuncio->climatizzatore==1)
                    <div class="d-flex justify-content-between">
                        <span>Climatizzatore disponibile</span>
                    </div>
                    @endif
                    @if($annuncio->lavatrice==1)
                    <div class="d-flex justify-content-between">
                        <span>Lavatrice disponibile</span>
                    </div>
                    @endif
                    @if($annuncio->lavastov==1)
                    <div class="d-flex justify-content-between">
                        <span>Lavastoviglie disponibile</span>
                    </div>
                    @endif
                    @if($annuncio->genere==1)
                    <div class="d-flex justify-content-between">
                        <span>Si accettano solo locatari di sesso maschile</span>
                    </div>
                    @endif
                    @if($annuncio->genere==0)
                    <div class="d-flex justify-content-between">
                        <span>Si accettano solo locatari di sesso femminile</span>
                    </div>
                    @endif
                    <div class="d-flex justify-content-between">
                        <span>Età minima locatari:</span><span>{{ $annuncio->etamin}}</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span>Età massima locatari:</span><span>{{ $annuncio->etamax}}</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span>Utenze presenti:</span><span>{{ $annuncio->utenze }}</span>
                    </div>
                    @if($annuncio->tipo_stanza==2)
                    <div class="d-flex justify-content-between">
                        <span>Tipologia Stanza:</span><span>Stanza Matrimoniale</span>
                    </div>
                    @endif
                    @if($annuncio->tipo_stanza==1)
                    <div class="d-flex justify-content-between">
                        <span>Tipologia Stanza:</span><span>Stanza Singola</span>
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

                @can('isLocatario')
                @isset($opzionato)
                @if($annuncio->disponibilita!=0)
                @if(!$opzionato)
                {{ Form::open(['action' => ['PublicController@opzionaAnnuncio', $annuncio->idannuncio]]) }}
                <div class="d-flex flex-column px-2 mt-4">
                    <button type="submit" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-remove"></i>Opziona Annuncio</button>
                </div>
                {{ Form::close() }}
                @else
                {{ Form::open(['action' => ['PublicController@opzionaAnnuncio', $annuncio->idannuncio]]) }}
                <div class="d-flex flex-column px-2 mt-4">
                    <button type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove"></i>Elimina Opzione Annuncio</button>
                </div>
                {{ Form::close() }}
                @endif
                @endif
                <div class="d-flex flex-column px-2 mt-4">
                    <a href = "{{ route('messaggistica', [Auth::user()->id, $idutente]) }}" class="btn btn-primary btn-sm" type="butbtn btn-primary btn-smton">Contatta Locatore</a>
                </div>
                @endcan
                @endisset()

                @can('isLocatore')
                @if($idutente ==  Auth::user()->id)
                <div class="d-flex flex-column px-2 mt-4">
                    <a href = "{{ route('modifica_annuncio', [$annuncio->idannuncio]) }}" class="btn btn-primary btn-sm" type="button">Modifica Annuncio</a>
                </div>
                <div class="d-flex flex-column px-2 mt-4">
                    <a onclick="return confirm('Sei sicuro di volerlo eliminare?')" href = "{{ route('elimina_annuncio', [$annuncio->idannuncio]) }}" class="btn btn-danger btn-sm" type="button">Elimina Annuncio</a>
                </div>
                <div class="d-flex flex-column px-2 mt-4">
                    <a href = "{{ route('richiedenti', [$annuncio->idannuncio]) }}" class="btn btn-success btn-sm" type="button">Visualizza Richiedenti</a>
                </div> 
                @if($annuncio->disponibilita!=0)
                <div class="d-flex flex-column px-2 mt-4">
                    <a href = "{{ route('assegna_annuncio', [$annuncio->idannuncio]) }}" class="btn btn-secondary btn-sm" type="button">Segna come assegnato</a>
                </div>
                @else
                <div class="d-flex flex-column px-2 mt-4">
                    <a href = "{{ route('assegna_annuncio', [$annuncio->idannuncio]) }}" class="btn btn-secondary btn-sm" type="button">Rimuovi assegnamento annuncio</a>
                </div>
                @endif
                @endif
                @endcan
            </div>
        </div>
    </div>
</div>
@endisset()
@endisset()