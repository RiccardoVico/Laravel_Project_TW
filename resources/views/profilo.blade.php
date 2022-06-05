<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>

		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
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
            <div class="image_profilo">
                <img src="">
            </div>
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
                        </div>
                        <div class="input-box">
                            {{ Form::label('cognome', 'Cognome', ['class' => 'label-input']) }}
                            {{ Form::text('cognome', $user->cognome, ['class' => 'input','id' => 'cognome','placeholder' => 'Inserisci un cognome']) }}
                        </div>
                        <div class="input-box">
                            {{ Form::label('mail', 'Email', ['class' => 'label-input']) }}
                            {{ Form::text('mail', $user->mail, ['class' => 'input','id' => 'mail','placeholder' => 'Inserisci un email']) }}
                        </div>
                        <div class="input-box">
                            {{ Form::label('recapito', 'Recapito', ['class' => 'label-input']) }}
                            {{ Form::text('recapito', $user->recapito, ['class' => 'input','id' => 'recapito','placeholder' => 'Inserisci un recapito']) }}
                        </div>
                        <div class="input-box">
                            {{ Form::label('via', 'Via', ['class' => 'label-input']) }}
                            {{ Form::text('via', $user->via, ['class' => 'input','id' => 'via','placeholder' => 'Inserisci una via']) }}
                        </div>
                        <div class="input-box">
                            {{ Form::label('citta', 'Citta', ['class' => 'label-input']) }}
                            {{ Form::text('citta', $user->citta, ['class' => 'input','id' => 'citta','placeholder' => 'Inserisci una citta']) }}
                        </div>
                        <div class="input-box">
                            {{ Form::label('numerocivico', 'Numero Civico', ['class' => 'label-input']) }}
                            {{ Form::text('numerocivico', $user->numerocivico, ['class' => 'input','id' => 'numerocivico','placeholder' => 'Inserisci un numero civico']) }}
                        </div>
                        <div class="input-box">
                            {{ Form::label('cap', 'Cap', ['class' => 'label-input']) }}
                            {{ Form::text('cap', $user->cap, ['class' => 'input','id' => 'cap','placeholder' => 'Inserisci il cap']) }}
                        </div>
                        <div class="input-box">
                            {{ Form::label('provincia', 'Provincia', ['class' => 'label-input']) }}
                            {{ Form::text('provincia', $user->provincia, ['class' => 'input','id' => 'provincia','placeholder' => 'Inserisci la provincia']) }}
                        </div>
                        <div class="input-box">
                            {{ Form::label('paese', 'Paese', ['class' => 'label-input']) }}
                            {{ Form::text('paese', $user->paese, ['class' => 'input','id' => 'paese','placeholder' => 'Inserisci un paese']) }}
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