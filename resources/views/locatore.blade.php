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
                @include('layouts/navaccesso')
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
                            <a href="#services" class="btn btn-outline-light">Get Started</a>
                        </div>
                    </div>
                    <div class="hero-carousel-item">
                        <img src="images/bg_image_4.png" alt="">
                        <div class="img-caption">
                            <h1 class="mb-4">We combine Design, Thinking, and Technical</h1>
                            <a href="#services" class="btn btn-outline-light">Get Started</a>
                            <a href="#services" class="btn btn-primary">See Pricing</a>
                        </div>
                    </div>
                    <div class="hero-carousel-item">
                        <img src="images/bg_image_8.png" alt="">
                        <div class="img-caption">
                            <div class="subhead">Easy way to build perfect website</div>
                            <h1 class="mb-4">Beautify handcrafted templates for your website</h1>
                            <a href="#services" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </header>

        <main>
            <a href="{{ route('catalogo') }}" class="nav-link">Gestisci le tue offerte</a>
            <h1>Catalogo completo annunci disponibili</h1>
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