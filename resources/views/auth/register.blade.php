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
                        {{ Form::text('nome', '', ['class' => 'input','placeholder' => 'Inserisci un nome']) }}
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
                        {{ Form::text('cognome', '', ['class' => 'input','placeholder' => 'Inserisci un cognome']) }}
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
                        {{ Form::text('mail', '', ['class' => 'input','placeholder' => 'Inserisci un email']) }}
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
                        {{ Form::text('recapito', '', ['class' => 'input','placeholder' => 'Inserisci un recapito']) }}
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
                        {{ Form::text('eta', '', ['class' => 'input','placeholder' => 'Inserisci la tua eta']) }}
						@if ($errors->first('eta'))
                		<ul class="errors">
                    		@foreach ($errors->get('eta') as $message)
                    		<li>{{ $message }}</li>
                    		@endforeach
                		</ul>
                		@endif
					</div>
					<div class="input-box4">
						{{ Form::label('genere', 'Genere', ['class' => 'label-input']) }}
                        {{ Form::select('genere', ['M'=>'Maschio', 'F'=>'Femmina'], 'M', ['class' => 'input']) }}
					</div>
					<div class="input-box">
						{{ Form::label('via', 'Via', ['class' => 'label-input']) }}
                        {{ Form::text('via', '', ['class' => 'input','placeholder' => 'Inserisci una via']) }}
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
                        {{ Form::text('citta', '', ['class' => 'input','placeholder' => 'Inserisci una citta']) }}
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
                        {{ Form::text('numerocivico', '', ['class' => 'input','placeholder' => 'Inserisci un numero civico']) }}
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
                        {{ Form::text('cap', '', ['class' => 'input','placeholder' => 'Inserisci un cap']) }}
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
                        {{ Form::text('provincia', '', ['class' => 'input','placeholder' => 'Inserisci una provincia']) }}
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
                        {{ Form::text('paese', '', ['class' => 'input','placeholder' => 'Inserisci un paese']) }}
						@if ($errors->first('paese'))
                		<ul class="errors">
                    		@foreach ($errors->get('paese') as $message)
                    		<li>{{ $message }}</li>
                    		@endforeach
                		</ul>
                		@endif
					</div>
					<div class="input-box">
						{{ Form::label('password', 'Password', ['class' => 'label-input']) }}
                        {{ Form::password('password', ['class' => 'input','placeholder' => 'Inserisci una password', 'id'=>'password']) }}
						@if ($errors->first('password'))
                		<ul class="errors">
                    		@foreach ($errors->get('password') as $message)
                    		<li>{{ $message }}</li>
                    		@endforeach
                		</ul>
                		@endif
					</div>
					<div class="input-box">
						{{ Form::label('password-confirm', 'Confirm Password', ['class' => 'label-input']) }}
                        {{ Form::password('password_confermation', ['class' => 'input', 'id'=>'password-confirm']) }}
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
					{{ Form::submit('Registrati', ['class' => 'form-btn1']) }}
				</div>
			{{ Form::close() }}
		</div>
		</div>
        
        <script src="js/registration_form.js"></script>
	</body>
</html>