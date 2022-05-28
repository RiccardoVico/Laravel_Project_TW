
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
            <form method="get" action="{{ route('filtraggio1') }}" >
    <h3>Applica filtri</h3>
    <input type="radio" name="tipologia" value="2"><label class="mx-2" for="appartamento"> Appartamento</label><input type="radio" name="tipologia", value="1"><label class="mx-2" for="postoletto"> Posto Letto</label>
    <br>
    <input type='text' name='prezzomax'>Prezzo max</input>
    <input type='text' name='prezzomin'>Prezzo min</input>
    <p> Seleziona il Periodo</p>
    <select name="periodo">
    <option value="1">1mese</option>
    <option value="2">2mesi</option>
    <option value="3">3mesi</option>
    <option value="4">4mesi</option>
    <option value="5">5mesi</option>
    <option value="6">6mesi</option>
    <option value="7">7mesi</option>
    <option value="8">8mesi</option>
    <option value="9">9mesi</option>
    <option value="10">10mesi</option>
    <option value="11">11mesi</option>
    <option value="12">1anno</option>
    </select>
    <button type="submit" class="btn btn-outline-light">Filtra</button>
</form>
           
<div class="page-section">
    <div class="container">
        <div class="col text-center pb-3">
            <h1>Catalogo completo annunci disponibili</h1>
        </div>
        @include('layouts/catalogo')
    </div>
</div></div></div></div>
@endsection
