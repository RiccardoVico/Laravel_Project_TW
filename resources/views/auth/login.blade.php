<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Login</title>

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/theme.css">
        <link rel="stylesheet" href="css/login_form.css">

    </head>
    <body>
        <main>
            <div class="wrapper">
                <div class="title">Accedi</div>
                <div class="input-box">
                    <span class="details">   {{ Form::open(array('route' => 'login', 'class' => 'contact-form')) }}<div class="input-box"></div>
                        <div class="field">


                            {{ Form::label('username', '.', ['class' => 'label-input']) }}
                            {{ Form::text('username', '', ['class' => 'input','id' => 'username','placeholder' => 'username']) }}</div>
                        @if ($errors->first('username'))
                        <ul class="errors">
                            @foreach ($errors->get('username') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @endif

                        <div class="field">

                            {{ Form::label('password', '.', ['class' => 'label-input']) }}
                            {{ Form::password('password', ['class' => 'input', 'id' => 'password','placeholder' => 'password']) }}
                            @if ($errors->first('password'))
                            <ul class="errors">
                                @foreach ($errors->get('password') as $message)
                                <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                            @endif
                        </div>
                        <p>Non hai un account?</p>  <div class="pass-link"><a href="{{ route('register') }}"">Registrati</a></div>
                        <div class="field">

                            {{ Form::submit('Login', ['class' => 'form-btn1']) }}
                        </div>
                        {{ Form::close() }}
                    </span>
                </div>
            </div>
        </main>

        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/theme.js"></script>

    </body>
</html>

