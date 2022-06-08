<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>@yield('title', 'Home')</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/maicons.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/owl-carousel/owl.carousel.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/theme.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/registration_form.css') }}">
        <style> .col { background-color:  #99cbff  ; }</style>
        
    </head>
    
    <body>
        <div class="back-to-top"></div>

        <header>
            <div id="menu">
                @include('layouts/navaccesso')
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
        <!-- <script src="js/registration_form.js"></script> -->
        <script src="{{ asset('js/filtri.js') }}"></script>

    </body>
</html>