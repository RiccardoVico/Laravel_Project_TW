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
                                <img src="{{ asset('images/slide1.jpg') }}" class="w-100" />
                                <a href="#!">
                                    <div class="hover-overlay">
                                        <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                    </div>
                                </a>
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
                            <h6 class="text-success">Disponibile</h6>
                            <div class="d-flex flex-column mt-4">
                                <a href = "{{ route('annuncio', [$annuncio->idannuncio]) }}" class="btn btn-primary btn-sm" type="button">Apri</a><br><br>
                                 
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