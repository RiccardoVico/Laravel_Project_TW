@isset($annunci)
@foreach ($annunci as $annuncio)
<div class="container py-3">
    <div class="row justify-content-center mb-3">
        <div class="col-md-12 col-xl-10">
            <div class="card shadow-0 border rounded-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                            <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                @isset($foto)
                                    @foreach ($foto as $foto_)
                                        @if($foto_->idannuncio == $annuncio->idannuncio)
                                            @if($foto_->descrizione != "default")
                                            <img src="{{ asset('images/annunci/' . $foto_->descrizione) }}" class="w-100" />
                                            @else
                                            <img src="{{ asset('images/annunci/no-image.png') }}" class="w-100" /> 
                                            @endif
                                        @endif
                                    @endforeach
                                @endisset()
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <h5>{{ $annuncio->nomeannuncio }}</h5>
                            <div class="d-flex flex-row">
                                <div class="text-danger mb-1 me-2">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span><img src = "{{ asset('images/geo-alt-fill.svg') }}" style='vertical-align: middle'/><i class="fas fa-map-marker-alt">{{ $annuncio->citta }}</i></span>
                            </div>
                            <p class="text-truncate mb-4 mb-md-0">
                                {{ $annuncio->descrizione }}
                            </p>
                        </div>
                        <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                            <div class="d-flex flex-row align-items-center mb-1">
                                <h4 class="mb-1 me-1">Canone: €{{ $annuncio->canoneaffitto }}</h4>
                            </div>
                            @if($annuncio->disponibilita != 0)
                            <h6 class="text-success">Disponibile</h6>
                            @else
                            <h6 class="text-danger">Assegnato</h6>
                            @endif
                            <div class="d-flex flex-column mt-4">
                                <a href = "{{ route('annuncio', [$annuncio->idannuncio]) }}" class="btn btn-primary btn-sm" type="button">Apri</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endisset()