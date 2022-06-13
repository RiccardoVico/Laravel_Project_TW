<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Gestione Profilo</title>

        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
        <link rel="stylesheet" href="{{ asset('css/registration_form.css') }}">

    </head>
    <body>
        <div class="back-to-top"></div>

        <header>
            <div id="menu">
                @include('layouts/navpublic')
            </div>
        </header>
        @isset($user)
        <main>
            <div class="page-section">
                <div class="locatario_profilo">
                    <div class="registration_container_box">
                        <div class="profilo_container">
                            <div class="title">Gestione Profilo</div>

                            {{ Form::open(array('route' => ['modifica_profilo', 'idutente'=>$user->id], 'class' => 'contact-form')) }}
                            <div class="user-details_profilo">
                                <div class="input-box">
                                    {{ Form::label('username', 'Username', ['class' => 'label-input']) }}
                                    {{ Form::text('username', $user->username, ['class' => 'input','id' => 'username','placeholder' => 'Inserisci un username']) }}
                                    @if ($errors->first('username'))
                                    <ul class="errors">
                                        @foreach ($errors->get('username') as $message)
                                        <li>{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>
                                <div class="input-box">
                                    {{ Form::label('nome', 'Nome', ['class' => 'label-input']) }}
                                    {{ Form::text('nome', $user->nome, ['class' => 'input','id' => 'nome','placeholder' => 'Inserisci un nome']) }}
                                    @if ($errors->first('nome'))
                                    <ul class="errors">
                                        @foreach ($errors->get('nome') as $message)
                                        <li>{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>
                                <div class="input-box">
                                    {{ Form::label('cognome', 'Cognome', ['class' => 'label-input']) }}
                                    {{ Form::text('cognome', $user->cognome, ['class' => 'input','id' => 'cognome','placeholder' => 'Inserisci un cognome']) }}
                                    @if ($errors->first('cognome'))
                                    <ul class="errors">
                                        @foreach ($errors->get('cognome') as $message)
                                        <li>{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>
                                <div class="input-box">
                                    {{ Form::label('mail', 'Email', ['class' => 'label-input']) }}
                                    {{ Form::text('mail', $user->mail, ['class' => 'input','id' => 'mail','placeholder' => 'Inserisci un email']) }}
                                    @if ($errors->first('mail'))
                                    <ul class="errors">
                                        @foreach ($errors->get('mail') as $message)
                                        <li>{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>
                                <div class="input-box">
                                    {{ Form::label('recapito', 'Recapito', ['class' => 'label-input']) }}
                                    {{ Form::text('recapito', $user->recapito, ['class' => 'input','id' => 'recapito','placeholder' => 'Inserisci un recapito']) }}
                                    @if ($errors->first('recapito'))
                                    <ul class="errors">
                                        @foreach ($errors->get('recapito') as $message)
                                        <li>{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>
                                <div class="input-box">
                                    {{ Form::label('eta', 'Eta', ['class' => 'label-input']) }}
                                    {{ Form::text('eta', $user->eta, ['class' => 'input','id' => 'eta','placeholder' => 'Inserisci la tua eta']) }}
                                    @if ($errors->first('eta'))
                                    <ul class="errors">
                                        @foreach ($errors->get('eta') as $message)
                                        <li>{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>
                                <div class="input-box">
                                    {{ Form::label('genere', 'Genere', ['class' => 'label-input']) }}
                                    {{ Form::select('genere', ['M'=>'Maschio', 'F'=>'Femmina'], $user->genere, ['class' => 'input']) }}
                                </div>
                                <div class="input-box">
                                    {{ Form::label('via', 'Via', ['class' => 'label-input']) }}
                                    {{ Form::text('via', $user->via, ['class' => 'input','id' => 'via','placeholder' => 'Inserisci una via']) }}
                                    @if ($errors->first('via'))
                                    <ul class="errors">
                                        @foreach ($errors->get('via') as $message)
                                        <li>{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>
                                <div class="input-box">
                                    {{ Form::label('citta', 'Citta', ['class' => 'label-input']) }}
                                    {{ Form::text('citta', $user->citta, ['class' => 'input','id' => 'citta','placeholder' => 'Inserisci una citta']) }}
                                    @if ($errors->first('citta'))
                                    <ul class="errors">
                                        @foreach ($errors->get('citta') as $message)
                                        <li>{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>
                                <div class="input-box">
                                    {{ Form::label('numerocivico', 'Numero Civico', ['class' => 'label-input']) }}
                                    {{ Form::text('numerocivico', $user->numerocivico, ['class' => 'input','id' => 'numerocivico','placeholder' => 'Inserisci un numero civico']) }}
                                    @if ($errors->first('numerocivico'))
                                    <ul class="errors">
                                        @foreach ($errors->get('numerocivico') as $message)
                                        <li>{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>
                                <div class="input-box">
                                    {{ Form::label('cap', 'Cap', ['class' => 'label-input']) }}
                                    {{ Form::text('cap', $user->cap, ['class' => 'input','id' => 'cap','placeholder' => 'Inserisci il cap']) }}
                                    @if ($errors->first('cap'))
                                    <ul class="errors">
                                        @foreach ($errors->get('cap') as $message)
                                        <li>{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>
                                <div class="input-box">
                                    {{ Form::label('provincia', 'Provincia', ['class' => 'label-input']) }}
                                    {{ Form::text('provincia', $user->provincia, ['class' => 'input','id' => 'provincia','placeholder' => 'Inserisci la provincia']) }}
                                    @if ($errors->first('provincia'))
                                    <ul class="errors">
                                        @foreach ($errors->get('provincia') as $message)
                                        <li>{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>
                                <div class="input-box">
                                    {{ Form::label('paese', 'Paese', ['class' => 'label-input']) }}
                                    {{ Form::text('paese', $user->paese, ['class' => 'input','id' => 'paese','placeholder' => 'Inserisci un paese']) }}
                                    @if ($errors->first('paese'))
                                    <ul class="errors">
                                        @foreach ($errors->get('paese') as $message)
                                        <li>{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>
                                @can('isLocatario')
                                <div class="input-box2">
                                    {{ Form::label('cittainteresse', 'Citta Interesse', ['class' => 'label-input']) }}
                                    {{ Form::text('cittainteresse', $user->cittainteresse, ['class' => 'input','id' => 'cittainteresse','placeholder' => 'Inserisci una citta di interesse']) }}
                                </div>
                                @endcan
                            </div>

                            {{ Form::submit('Salva Modifiche', ['class' => 'salva_button']) }}

                            {{ Form::close() }}
                        </div>
                    </div>
                    <div class="options_buttons">
                        <button class="modifica_button">Modifica Profilo</button>
                    </div>
                </div>
            </div>
        </main>
        @endisset()
        <footer class="page-footer">
            @include('layouts/footer_public')
        </footer>
        <!-- end #footer -->

        <script src="../js/profilo_locatario.js"></script>
        <script src="../js/jquery-3.5.1.min.js"></script>
        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../js/theme.js"></script>

    </body>
</html>