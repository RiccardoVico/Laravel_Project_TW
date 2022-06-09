<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
    <body>

        <div class="back-to-top"></div>

        <header>
            <div id="menu">
                @include('layouts/navadmin')
            </div>

            <!-- end #menu -->
            <div class="page-banner home-banner mb-5">
                <div class="slider-wrapper">
                    <div class="owl-carousel hero-carousel">
                        <div class="hero-carousel-item">
                            <img src="images/stats.jpg" alt="">
                            <div class="img-caption">
                                <div class="subhead"></div>
                                <h1 class="mb-4">Sezione Amministratore</h1>
                                <!--<a href="#services" class="btn btn-outline-light">Get Started</a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <main>
            <div class="page-section">
                <div class="container">
                    <div class="col text-center pb-3">
                        <h1>Catalogo completo annunci disponibili</h1>
                    </div>
                    @include('layouts/catalogo')
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