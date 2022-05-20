<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Revetive - Free Business Corporate Template By MACode ID</title>

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/theme.css">

</head>
<body>

  <!-- Back to top button -->
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
                <li class="breadcrumb-item"><a href="../public">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">FAQ</li>
              </ol>
            </nav>
            <h1 class="fg-white text-center">FAQ</h1>
          </div>
        </div>
      </div>
    </div> <!-- .page-banner -->
  </header>

  <main>
    <div class="page-section">
      <div class="list-group w-75" style="margin-left: auto; margin-right: auto">
        <a href="#shortExampleAnswer1collapse" data-toggle="collapse" aria-expanded="false"
            aria-controls="shortExampleAnswer1collapse" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Question 1</h5>
            </div>
            <p class="mb-1">
                Short & concise version of the answer.
            </p>
            <small><u>Learn more</u></small>
            <!-- Collapsed content -->
            <div class="collapse mt-3" id="shortExampleAnswer1collapse">
                Detailed and comprehensive answer goes here. pariatur cliche reprehenderit, enim eiusmod
                high
                life accusamus terry richardson ad
                squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                sapiente ea proident.
            </div>
        </a>
        <a href="#shortExampleAnswer2collapse" data-toggle="collapse" aria-expanded="false"
            aria-controls="shortExampleAnswer1collapse" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Question 2</h5>
            </div>
            <p class="mb-1">
                Short & concise version of the answer.
            </p>
            <small class="text-muted"><u>Learn more</u></small>
            <!-- Collapsed content -->
            <div class="collapse mt-3" id="shortExampleAnswer2collapse">
                Detailed and comprehensive answer goes here. pariatur cliche reprehenderit, enim eiusmod
                high
                life accusamus terry richardson ad
                squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                sapiente ea proident.
            </div>
        </a>
        <a href="#shortExampleAnswer3collapse" data-toggle="collapse" aria-expanded="false"
            aria-controls="shortExampleAnswer1collapse" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Question 3</h5>
            </div>
            <p class="mb-1">
                Short & concise version of the answer.
            </p>
            <small class="text-muted"><u>Learn more</u></small>
            <!-- Collapsed content -->
            <div class="collapse mt-3" id="shortExampleAnswer3collapse">
                Detailed and comprehensive answer goes here. pariatur cliche reprehenderit, enim eiusmod
                high
                life accusamus terry richardson ad
                squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                sapiente ea proident.
            </div>
        </a>
    </div>
    </div>
  </main>

    <footer class="page-footer">
        @include('layouts/footer_public')
    </footer>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/theme.js"></script>

</body>
</html>