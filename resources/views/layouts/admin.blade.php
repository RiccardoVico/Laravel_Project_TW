<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>StatsAdmin</title>

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/theme.css">

    </head>
    <body>

        <!-- Back to top button -->
        <div class="back-to-top"></div>

        <header>
            <div id="menu">
                @include('layouts/navadmin')
            </div>

            <div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url(images/stats.jpg)"  >;
                <div class="container h-100">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-lg-8">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
                                    <li class="breadcrumb-item"><a href="../public">HomeAdmin</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Statistiche</li>

                                </ol>
                                <h1 class="fg-white text-center">Statistiche</h1>
                            </nav>

                        </div>
                    </div>
                </div>
            </div> <!-- .page-banner -->
        </header>
        <main>
            @yield('content')
        </main>
        <footer class="page-footer">
            @include('layouts/footer_public')
        </footer>
    </body>
</html>


