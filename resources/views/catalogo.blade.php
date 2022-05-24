<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Catalogo</title>

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="css/theme.css">

    </head>
    <body>
        <div class="back-to-top"></div>

        <header>
            <div id="menu">
                @include('layouts/navpublic')
            </div>

            <div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url(images/chiave2.jpeg);">
                <div class="container h-100">
                  <div class="row justify-content-center align-items-center h-100">
                    <div class="col-lg-8">
                      <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
                          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Catalogo</li>
                        </ol>
                      </nav>
                      <h1 class="fg-white text-center">Catalogo</h1>
                    </div>
                  </div>
                </div>
            </div>
        </header>

        <main>
            <div class="page-section">
                <div class="container">
                    @include('layouts/catalogo')
                </div>
            </div>
        </main>
        
        <footer class="page-footer">
            @include('layouts/footer_public')
        </footer>

        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/theme.js"></script>

    </body>
</html>