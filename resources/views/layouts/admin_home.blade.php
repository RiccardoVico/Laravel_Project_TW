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
                                <div class="subhead"></div>
                                <h1 class="mb-4">Live a unique experience</h1>
                                <!--<a href="#services" class="btn btn-primary">Read More</a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header> 
    </body>
</html>

