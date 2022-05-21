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

            <div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url(images/bg_image_3.jpg);">
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
              <div class="row align-items-center">
                <div class="col-md-6 py-3">
                  <div class="subhead">Catalogo</div>
                  <h2 class="title-section"></h2>
                </div>
                <!--<div class="col-md-6 py-3 text-md-right">
                  <a href="portfolio.html" class="btn btn-outline-primary">Catalogo Completo <span class="mai-arrow-forward ml-2"></span></a>
                </div>-->
              </div>
      
              <div class="row mt-3">
                <div class="col-lg-4 py-3">
                  <div class="portfolio">
                    <a href="images/portfolio/work-1.jpg" data-fancybox="portfolio">
                      <img src="images/portfolio/work-1.jpg" alt="">
                    </a>
                  </div>
                </div>
                <div class="col-lg-4 py-3">
                  <div class="portfolio">
                    <a href="images/portfolio/work-2.jpg" data-fancybox="portfolio">
                      <img src="images/portfolio/work-2.jpg" alt="">
                    </a>
                  </div>
                </div>
                <div class="col-lg-4 py-3">
                  <div class="portfolio">
                    <a href="images/portfolio/work-3.jpg" data-fancybox="portfolio">
                      <img src="images/portfolio/work-3.jpg" alt="">
                    </a>
                  </div>
                </div>
                <div class="col-lg-4 py-3">
                  <div class="portfolio">
                    <a href="images/portfolio/work-4.jpg" data-fancybox="portfolio">
                      <img src="images/portfolio/work-4.jpg" alt="">
                    </a>
                  </div>
                </div>
                <div class="col-lg-4 py-3">
                  <div class="portfolio">
                    <a href="images/portfolio/work-5.jpg" data-fancybox="portfolio">
                      <img src="images/portfolio/work-5.jpg" alt="">
                    </a>
                  </div>
                </div>
                <div class="col-lg-4 py-3">
                  <div class="portfolio">
                    <a href="images/portfolio/work-6.jpg" data-fancybox="portfolio">
                      <img src="images/portfolio/work-6.jpg" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div> 
          </div>

            <!--<div class="page-section">
                <div class="container">
                  <div class="owl-carousel testimonial-carousel">
                    <div class="card-testimonial">
                      <div class="content">
                        The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph
                      </div>
                      <div class="author">
                        <div class="avatar">
                          <img src="images/person/person_1.jpg" alt="">
                        </div>
                        <div class="d-inline-block ml-2">
                          <div class="author-name">Sam Watson</div>
                          <div class="author-info">CEO - Mosh Elite Ltd.</div>
                        </div>
                      </div>
                    </div>
          
                    <div class="card-testimonial">
                      <div class="content">
                        The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph
                      </div>
                      <div class="author">
                        <div class="avatar">
                          <img src="images/person/person_2.jpg" alt="">
                        </div>
                        <div class="d-inline-block ml-2">
                          <div class="author-name">Edinson Alfa</div>
                          <div class="author-info">CEO - Mosh Elite Ltd.</div>
                        </div>
                      </div>
                    </div>
          
                    <div class="card-testimonial">
                      <div class="content">
                        The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph
                      </div>
                      <div class="author">
                        <div class="avatar">
                          <img src="images/person/person_3.jpg" alt="">
                        </div>
                        <div class="d-inline-block ml-2">
                          <div class="author-name">May Halloway</div>
                          <div class="author-info">CEO - Mosh Elite Ltd.</div>
                        </div>
                      </div>
                    </div>
          
                    <div class="card-testimonial">
                      <div class="content">
                        The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph
                      </div>
                      <div class="author">
                        <div class="avatar">
                          <img src="images/person/person_1.jpg" alt="">
                        </div>
                        <div class="d-inline-block ml-2">
                          <div class="author-name">Sam Watson</div>
                          <div class="author-info">CEO - Mosh Elite Ltd.</div>
                        </div>
                      </div>
                    </div>
          
                    <div class="card-testimonial">
                      <div class="content">
                        The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph
                      </div>
                      <div class="author">
                        <div class="avatar">
                          <img src="images/person/person_2.jpg" alt="">
                        </div>
                        <div class="d-inline-block ml-2">
                          <div class="author-name">Edinson Alfa</div>
                          <div class="author-info">CEO - Mosh Elite Ltd.</div>
                        </div>
                      </div>
                    </div>
          
                    <div class="card-testimonial">
                      <div class="content">
                        The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph
                      </div>
                      <div class="author">
                        <div class="avatar">
                          <img src="images/person/person_3.jpg" alt="">
                        </div>
                        <div class="d-inline-block ml-2">
                          <div class="author-name">May Halloway</div>
                          <div class="author-info">CEO - Mosh Elite Ltd.</div>
                        </div>
                      </div>
                    </div>
          
                  </div>
                </div> 
              </div>-->
            </main>
                            <?php
echo('ciao');

foreach($products as $product)
           echo( $product->via);?>
        <footer class="page-footer">
            @include('layouts/footer_public')
        </footer>

        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/theme.js"></script>

    </body>
</html>