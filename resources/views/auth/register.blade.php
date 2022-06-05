<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{{ asset('css/registration_form.css') }}">
        
        <title>Registrazione</title>
	</head>
	<body>
		<div class="registration-box">
		<div class="registration_container">
			<div class="title">Registration</div>
            <div class="tipologia">

				<span class="tipologia-title">Tipo Account</span>

				<div class="tipo-account">
					<div class="tipo_1">
						<input type="radio" name="tipo" value="locatario" checked><span>Locatario</span>
					</div>
					<div class="tipo_2">
						<input type="radio" name="tipo" value="locatore"><span>Locatore</span>
					</div>
				</div>
            </div>
			{{ Form::open(array('route' => 'register', 'class' => 'contact-form')) }}
				@csrf
				<div class="user-details">
					<div class="input-box">
						{{ Form::label('username', 'Username', ['class' => 'label-input']) }}
                        {{ Form::text('username', '', ['class' => 'input','placeholder' => 'Inserisci uno username']) }}
					</div>
					<div class="input-box">
						{{ Form::label('nome', 'Nome', ['class' => 'label-input']) }}
                        {{ Form::text('nome', '', ['class' => 'input','placeholder' => 'Inserisci un nome']) }}
					</div>
					<div class="input-box">
						{{ Form::label('cognome', 'Cognome', ['class' => 'label-input']) }}
                        {{ Form::text('cognome', '', ['class' => 'input','placeholder' => 'Inserisci un cognome']) }}
					</div>
					<div class="input-box">
						{{ Form::label('mail', 'Email', ['class' => 'label-input']) }}
                        {{ Form::text('mail', '', ['class' => 'input','placeholder' => 'Inserisci un email']) }}
					</div>
					<div class="input-box">
						{{ Form::label('recapito', 'Recapito', ['class' => 'label-input']) }}
                        {{ Form::text('recapito', '', ['class' => 'input','placeholder' => 'Inserisci un recapito']) }}
					</div>
					<div class="input-box">
						{{ Form::label('eta', 'Eta', ['class' => 'label-input']) }}
                        {{ Form::text('eta', '', ['class' => 'input','placeholder' => 'Inserisci la tua eta']) }}
					</div>
					<div class="input-box4">
						{{ Form::label('genere', 'Genere', ['class' => 'label-input']) }}
                        {{ Form::select('genere', ['M'=>'Maschio', 'F'=>'Femmina'], 'M', ['class' => 'input']) }}
					</div>
					<div class="input-box">
						{{ Form::label('via', 'Via', ['class' => 'label-input']) }}
                        {{ Form::text('via', '', ['class' => 'input','placeholder' => 'Inserisci una via']) }}
					</div>
					<div class="input-box">
						{{ Form::label('citta', 'Citta', ['class' => 'label-input']) }}
                        {{ Form::text('citta', '', ['class' => 'input','placeholder' => 'Inserisci una citta']) }}
					</div>
					<div class="input-box">
						{{ Form::label('numerocivico', 'Numero Civico', ['class' => 'label-input']) }}
                        {{ Form::text('numerocivico', '', ['class' => 'input','placeholder' => 'Inserisci un numero civico']) }}
					</div>
					<div class="input-box">
						{{ Form::label('cap', 'Cap', ['class' => 'label-input']) }}
                        {{ Form::text('cap', '', ['class' => 'input','placeholder' => 'Inserisci un cap']) }}
					</div>
					<div class="input-box">
						{{ Form::label('provincia', 'Provincia', ['class' => 'label-input']) }}
                        {{ Form::text('provincia', '', ['class' => 'input','placeholder' => 'Inserisci una provincia']) }}
					</div>
					<div class="input-box">
						{{ Form::label('paese', 'Paese', ['class' => 'label-input']) }}
                        {{ Form::text('paese', '', ['class' => 'input','placeholder' => 'Inserisci un paese']) }}
					</div>
					<div class="input-box">
						{{ Form::label('password', 'Password', ['class' => 'label-input']) }}
                        {{ Form::text('password', '', ['class' => 'input','placeholder' => 'Inserisci una password']) }}
					</div>
					<div class="input-box">
						{{ Form::label('confirm password', 'Confirm Password', ['class' => 'label-input']) }}
                        {{ Form::text('confirm password', '', ['class' => 'input','placeholder' => 'Conferma Password']) }}
					</div>
					<div class="input-box2">
						{{ Form::label('cittainteresse', 'Citta Interesse', ['class' => 'label-input']) }}
                        {{ Form::text('cittainteresse', '', ['class' => 'input','placeholder' => 'Inserici citta interesse']) }}
					</div>
					<div class="input-box3">
						{{ Form::label('role', 'Role', ['class' => 'label-input']) }}
                        {{ Form::text('role', '', ['class' => 'input']) }}
					</div>
				</div>

				<div class="button">
					<input type="submit" value="Register">
				</div>
			{{ Form::close() }}
		</div>
		</div>
        
        <script src="js/registration_form.js"></script>
	</body>
</html>