@extends('layouts.public')

@section('header')
<div class="page-banner home-banner mb-5">
    <div class="slider-wrapper">
        <div class="owl-carousel hero-carousel">
            <div class="hero-carousel-item">
                <img src="images/bg_image_1.jpg" alt="">
                <div class="img-caption">
                    <div class="subhead"></div>
                    <h1 class="mb-4">Homex<span class="fg-primary">Students</span></h1>
                    <!--<a href="#services" class="btn btn-outline-light">Get Started</a>-->
                </div>
            </div>
            <div class="hero-carousel-item">
                <img src="images/bg_image_4.png" alt="">
                <div class="img-caption">
                    <h1 class="mb-4">Sei un locatore? Fai il login e gestisci i tuoi annunci</h1>
                    <!--<a href="#services" class="btn btn-outline-light">Get Started</a>
                    <a href="#services" class="btn btn-primary">See Pricing</a>-->
                </div>
            </div>
            <div class="hero-carousel-item">
                <img src="images/bg_image_8.png" alt="">
                <div class="img-caption">
                    <div class="subhead"></div>
                    <h1 class="mb-4">Sei uno studente? Fai il login e trova l'offerta che fa per te</h1>
                    <!--<a href="#services" class="btn btn-primary">Read More</a>-->
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript">

$(function () {
$('#example')
.on('mouseover', function (event) {
say("E' la nostra Università!");
})
.on('click', function (event) {
say("Non perdere l'occasione di poter collaborare con noi in sede");
});
});
function say(text) {
$('#console').append(text + '<br>');
}

</script>
@endsection

@section('content')
<div class="page-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 py-3">
                <div class="subhead">Chi Siamo</div>
                <h2 class="title-section">Un team di studenti nato per aiutare gli studenti</h2>

                <p>Siamo un team nato all'interno dell'università politecnica delle marche che ha deciso di sviluppare un portale online per semplificare la ricerca degli alloggi da parte degli studenti.
                    Gli annunci degli affitti presenti nel sito riguardano singole stanze o interi appartamenti che posso essere affittati agli studenti
                    che possono scegliere tra le varie offerte messe a diposizione dai vari affittuari.</p>

                <a href="{{ route('chi_siamo') }}" class="btn btn-primary mt-4">Mostra di piu</a>
            </div>
            <div class="col-lg-6 py-3">
                <div class="about-img">
                    <img src="images/chi_siamo.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 py-3">
                <div class="subhead">Ultime Offerte</div>
                <h2 class="title-section"></h2>
            </div>
            <div class="col-md-6 py-3 text-md-right">
                <a href="{{ route('catalogo') }}" class="btn btn-outline-primary">Catalogo Completo <span class="mai-arrow-forward ml-2"></span></a>
            </div>
        </div>
        <div class="row mt-3">
            @include('layouts/prova')
        </div>
    </div>
</div>

<div class="page-section">
    <div class="container">
        <div class="owl-carousel testimonial-carousel">
            <div class="card-testimonial">
                <div class="content">
                    Scorri catalogo
                    <hr>
                    <p>Divertiti a sfogliare tutti i nostri annunci</p>
                </div>
            </div>

            <div class="card-testimonial">
                <div class="content">
                    Trova il tuo annuncio ideale
                    <hr>
                    <p>Valuta fra le varie opzioni a disposizione la soluzione più adatta per te</p>
                </div>
            </div>

            <div class="card-testimonial">
                <div class="content">
                    Registrati e contatta il locatore
                    <hr>
                    <p>Accedi al nostro sito per contattare i locatari</p>
                </div>
            </div>

            <div class="card-testimonial">
                <div class="content">
                    Vuoi inserire un annuncio per una casa o appartamento? 
                    <hr>
                    <p>Registrati sul nostro sito e vai nella sezione Locatore-Gestisci le tue offerte-Inserisci annuncio</p>
                </div>
            </div>

            <div class="card-testimonial">
                <div class="content">
                    Inserisci un annuncio
                    <hr>
                    <p>Proponi il tuo locale da affittare</p>
                </div>
            </div>

            <div class="card-testimonial">
                <div class="content">
                    Messaggistica incorporata
                    <hr>
                    <p>Comunica con i possibili locatari</p>
                </div>
            </div>

        </div> <!-- .row -->
    </div> <!-- .container -->
</div>

<div class="page-section">
    <div class="title" style="text-align: center; font-weight: 700; margin-bottom: 30px;">Le universita con cui collaboriamo</div>
    <div class="container-fluid">
        <div class="row row-cols-md-3 row-cols-lg-5 justify-content-center text-center">
            <div class="py-3 px-5">
                <img id = "example" src="images/clients/logo_univpm.png" alt="" width="175" style="margin-top: 25px">
                <p id = "console"></p>
            </div>
            <div class="py-3 px-3">
                <img src="images/clients/logo_sapienza.png" alt="" width="300" style="margin-top: 50px">
            </div>
            <div class="py-3 px-5">
                <img src="images/clients/logo_bologno.png" alt="">
            </div>
            <div class="py-3 px-5">
                <img src="images/clients/logo_siena.png" alt="" width="225">
            </div>
            <div class="py-3 px-5">
                <img src="images/clients/logo_bho.png" alt="" width="200">
            </div>
        </div>
    </div> 
</div>
@endsection