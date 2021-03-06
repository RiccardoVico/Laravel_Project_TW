<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <head>
  
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
          
            <title>@yield('title', 'Home')</title>
            
            <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset('css/maicons.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset('css/owl-carousel/owl.carousel.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset('css/theme.css') }}">
          
<!--            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/maicons.css">
            <link rel="stylesheet" href="css/owl-carousel/owl.carousel.css">
            <link rel="stylesheet" href="css/theme.css">-->
          
          </head>
    </head>
    <body>
        <div class="back-to-top"></div>

        <header>
            <div id="menu">
                @include('layouts/navpublic')
                @yield('header')
            </div>
        </header>
        <main>
            @yield('content')
        </main>

        <!-- end #content -->
        <footer class="page-footer">
            @include('layouts/footer_public')
        </footer>
        <!-- end #footer -->
        
        <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/theme.js') }}"></script>
        
<!--        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/theme.js"></script>-->

    </body>
</html>