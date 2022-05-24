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
			<div class="title">InserisciFaq</div>
           
			<form action="admininserimentofaq" method="POST">
                @csrf
				
				<div class="user-details">
					<div class="input-box">
						<span class="details">idfaq</span>
						<input type="int" placeholder="Scegli uno username" name="idfaq" required>
					</div>
					<div class="input-box">
						<span class="details">domanda</span>
						<input type="text" placeholder="domanda" name="domanda" required>
					</div>
					<div class="input-box">
						<span class="details">risposta</span>
						<input type="text" placeholder="Inserisci il cognome" name="risposta" required>
					</div>
					<div class="input-box">
						<span class="details">categoria</span>
						<input type="text" placeholder="Inserisci l'indirizzo email" name="categoria" required>
					
					
					</div>
				</div>

				

				<div class="button">
					<input type="submit" value="inseriscifaq">
				</div>
			</form>
		</div>
        
        <script src="js/registration_form.js"></script>
	</body>
</html>