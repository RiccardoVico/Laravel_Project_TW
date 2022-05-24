
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <head>
  
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
          
            <title>HomexStudent</title>
          
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/maicons.css">
            <link rel="stylesheet" href="css/owl-carousel/owl.carousel.css">
            <link rel="stylesheet" href="css/theme.css">
          
          </head>
    </head>
    <body>

        <div class="back-to-top"></div>

        <header>
            <div id="menu">
                @include('layouts/navpublic')
            </div>

            <!-- end #menu -->
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
                            <h1 class="mb-4">We combine Design, Thinking, and Technical</h1>
                            <!--<a href="#services" class="btn btn-outline-light">Get Started</a>
                            <a href="#services" class="btn btn-primary">See Pricing</a>-->
                        </div>
                    </div>
                    <div class="hero-carousel-item">
                        <img src="images/bg_image_8.png" alt="">
                        <div class="img-caption">
                            <div class="subhead">Easy way to build perfect website</div>
                            <h1 class="mb-4">Live a unique experience</h1>
                            <!--<a href="#services" class="btn btn-primary">Read More</a>-->
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </header>

        <main>
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
                            <div class="subhead">Offerte in evidenza</div>
                            <h2 class="title-section"></h2>
                        </div>
                        <div class="col-md-6 py-3 text-md-right">
                            <a href="{{ route('catalogo') }}" class="btn btn-outline-primary">Catalogo Completo <span class="mai-arrow-forward ml-2"></span></a>
                        </div>
                    </div>
                    <div class="row mt-3">
                        @include('layouts/catalogo')
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
                            <!--<div class="author">
                              <div class="avatar">
                                <img src="img/person/person_1.jpg" alt="">
                              </div>
                              <div class="d-inline-block ml-2">
                                <div class="author-name">Sam Watson</div>
                                <div class="author-info">CEO - Mosh Elite Ltd.</div>
                              </div>
                            </div>-->
                        </div>

                        <div class="card-testimonial">
                            <div class="content">
                                Trova il tuo annuncio ideale
                                <hr>
                                <p>Valuta fra le varie opzioni a disposizione la soluzione più adatta per te</p>
                            </div>
                            <!--<div class="author">
                              <div class="avatar">
                                <img src="img/person/person_2.jpg" alt="">
                              </div>
                              <div class="d-inline-block ml-2">
                                <div class="author-name">Edinson Alfa</div>
                                <div class="author-info">CEO - Mosh Elite Ltd.</div>
                              </div>
                            </div>-->
                        </div>

                        <div class="card-testimonial">
                            <div class="content">
                                Registrati e contatta il locatore
                                <hr>
                                <p>Accedi al nostro sito per contattare i locatari</p>
                            </div>
                            <!--<div class="author">
                              <div class="avatar">
                                <img src="img/person/person_3.jpg" alt="">
                              </div>
                              <div class="d-inline-block ml-2">
                                <div class="author-name">May Halloway</div>
                                <div class="author-info">CEO - Mosh Elite Ltd.</div>
                              </div>
                            </div> -->
                        </div>

                        <div class="card-testimonial">
                            <div class="content">
                                Vuoi inserire un annuncio per una casa o appartamento? 
                                <hr>
                                <p>Registrati sul nostro sito e vai nella sezione Locatore-Gestisci le tue offerte-Inserisci annuncio</p>
                            </div>
                            <!--<div class="author">
                              <div class="avatar">
                                <img src="img/person/person_1.jpg" alt="">
                              </div>
                              <div class="d-inline-block ml-2">
                                <div class="author-name">Sam Watson</div>
                                <div class="author-info">CEO - Mosh Elite Ltd.</div>
                              </div>
                            </div>-->
                        </div>

                        <div class="card-testimonial">
                            <div class="content">
                                Inserisci un annuncio
                                <hr>
                                <p>Proponi il tuo locale da affittare</p>
                            </div>
                            <!--<div class="author">
                              <div class="avatar">
                                <img src="img/person/person_2.jpg" alt="">
                              </div>
                              <div class="d-inline-block ml-2">
                                <div class="author-name">Edinson Alfa</div>
                                <div class="author-info">CEO - Mosh Elite Ltd.</div>
                              </div>
                            </div>-->
                        </div>

                        <div class="card-testimonial">
                            <div class="content">
                                Messaggistica incorporata
                                <hr>
                                <p>Comunica con i possibili locatari</p>
                            </div>
                            <!--<div class="author">
                              <div class="avatar">
                                <img src="img/person/person_3.jpg" alt="">
                              </div>
                              <div class="d-inline-block ml-2">
                                <div class="author-name">May Halloway</div>
                                <div class="author-info">CEO - Mosh Elite Ltd.</div>
                              </div>
                            </div>-->
                        </div>

                    </div> <!-- .row -->
                </div> <!-- .container -->
            </div>

            <div class="page-section">
                <div class="title" style="text-align: center; font-weight: 700; margin-bottom: 30px;">Le universita con cui collaboriamo</div>
                <div class="container-fluid">
                    <div class="row row-cols-md-3 row-cols-lg-5 justify-content-center text-center">
                        <div class="py-3 px-5">
                            <img src="images/clients/logo_univpm.png" alt="" width="175" style="margin-top: 25px">
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

        </main>

        <!-- end #content -->
        <footer class="page-footer">
            @include('layouts/footer_public')
        </footer>
        <!-- end #footer -->

        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/theme.js"></script>

    </body>
</html>