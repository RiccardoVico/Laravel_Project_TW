
    
    
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Redirect</title>

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/theme.css">
        <link rel="stylesheet" href="css/login_form.css">

    </head>
    <body>
        <p>La faq inserita è stata registrata correttamente</p>  <div class="pass-link"><a href="{{ route('home_admin') }}"">Torna nella tua home</a></div>
        </main>
    </body>
</html>