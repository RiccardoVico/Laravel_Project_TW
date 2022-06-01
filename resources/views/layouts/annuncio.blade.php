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
                    <span>Tipologia:</span><span>Da mettere</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span>Città:</span><span>{{ $annuncio->citta }}</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span>Via:</span><span>{{ $annuncio->via }} {{ $annuncio->numerocivico }}</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span>Superficie:</span><span>{{ $annuncio->superficie }} mq</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span>Posti letto:</span><span>{{ $annuncio->postiletto }}</span>
                </div>
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