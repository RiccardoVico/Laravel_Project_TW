<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
        <link rel="stylesheet" href="css/registration_form.css">
        
        <title>Registrazione</title>
	</head>
	<body>
		<div class="registration_container">
			<div class="title">Registration</div>
            <div class="tipologia">

				<span class="tipologia-title">Tipo Account</span>

				<div class="tipo-account">
					<div class="tipo_1">
						<input type="radio" name="tipo" value="Locatario" checked><span>Locatario</span>
					</div>
					<div class="tipo_2">
						<input type="radio" name="tipo" value="Locatore"><span>Locatore</span>
					</div>
				</div>
            </div>
			<form action="register" method="POST">
                @csrf
				
				<div class="user-details">
					<div class="input-box">
						<span class="details">Username</span><div class="input-box">
						<input type="text" placeholder="Scegli uno username" name="username" required>
					</div>
					<div class="input-box">
						<span class="details">Nome</span>
						<input type="text" placeholder="Inserisci il nome" name="nome" required>
					</div>
					<div class="input-box">
						<span class="details">Cognome</span>
						<input type="text" placeholder="Inserisci il cognome" name="cognome" required>
					</div>
					<div class="input-box">
						<span class="details">Email</span>
						<input type="text" placeholder="Inserisci l'indirizzo email" name="mail" required>
					</div>
					<div class="input-box">
						<span class="details">Recapito</span>
						<input type="text" placeholder="Inserisci un recapito telefonico" name="recapito" required>
					</div>
					<div class="input-box">
						<span class="details">Via</span>
						<input type="text" placeholder="Inserisci via di residenza" name="via" required>
					</div>
					<div class="input-box">
						<span class="details">Città</span>
						<input type="text" placeholder="Inserisci città residenza" name="citta" required>
					</div>
					<div class="input-box">
						<span class="details">Numero Civico</span>
						<input type="text" placeholder="Inserisci il numero civico" name="numerocivico" required>
					</div>
					<div class="input-box">
						<span class="details">Cap</span>
						<input type="text" placeholder="Inserisci il codice postale" name="cap" required>
					</div>
					<div class="input-box">
						<span class="details">Provincia</span>
						<input type="text" placeholder="Inserisci provincia di residenza" name="provincia" required>
					</div>
					<div class="input-box">
						<span class="details">Paese</span>
						<input type="text" placeholder="Inserisci lo stato" name="paese" required>
					</div>
					<div class="input-box">
						<span class="details">Password</span>
						<input type="password" placeholder="Inserisci password" name="password" required>
					</div>
					<div class="input-box">
						<span class="details">Confirm Password</span>
						<input type="password" placeholder="Inserisci password" name="confirm password" required>
					</div>
					<div class="input-box2">
						<span class="details">Città Interesse</span>
						<input type="text" placeholder="Inserisci la città d'interesse" name="cittainteresse" nullable>
					</div>
					<div class="input-box3">
						<span class="details">Tipologia</span>
						<input type="text" value="" id="tipologia" name="tipologia">
					</div>
				</div>

				<!--<div class="gender-details">
					<input type="radio" name="gender" id="dot-1">
					<input type="radio" name="gender" id="dot-2">
					<input type="radio" name="gender" id="dot-3">
					<span class="gender-title">Gender</span>
					<div class="category">
						<label for="dot-1">
							<span class="dot one"></span>
							<span class="gender">Male</span>
						</label>
						<label for="dot-2">
							<span class="dot two"></span>
							<span class="gender">Female</span>
						</label>
						<label for="dot-3">
							<span class="dot three"></span>
							<span class="gender">Prefer not to say</span>
						</label>
					</div>
				</div>-->

				<div class="button">
					<input type="submit" value="Register">
				</div>
			</form>
		</div>
        
        <script src="js/registration_form.js"></script>
	</body>
</html>