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
           
			<form action="inserimentoann" method="POST">
                @csrf
				
				<div class="user-details">
					<div class="input-box">
						<span class="details">idannuncio</span>
						<input type="int" placeholder="id" name="idannuncio" required>
					</div>
                                    <div class="input-box">
						<span class="details">nomeannuncio</span>
						<input type="varchar(20)" placeholder="nome" name="nomeannuncio" required>
					</div>
                                     <div class="input-box">
						<span class="details">canoneaffitto</span>
						<input type="int" placeholder="canone" name="canoneaffitto" required>
					</div>
					<div class="input-box">
						<span class="details">cap</span>
						<input type="varchar(5)" placeholder="cap" name="cap" required>
					</div>
                                    <div class="input-box">
						<span class="details">numerocivico</span>
						<input type="varchar(5)" placeholder="numerocivico" name="numerocivico" required>
					</div>
					<div class="input-box">
						<span class="details">citta</span>
						<input type="varchar(5)" placeholder="citta" name="citta" required>
					</div>
					<div class="input-box">
						<span class="details">disponibilita</span>
                                                <input type="tinyint" placeholder="disponibilita" name="disponibilita" required>
					</div>
                                    <div class="input-box">
						<span class="details">datacc</span>
                                                <input type="date" placeholder="datacc" name="datacc" required>
					</div>
                                    <div class="input-box">
						<span class="details">superificie</span>
                                                <input type="double" placeholder="superificie" name="superificie" required>
					</div>
                                    <div class="input-box">
						<span class="details">postiletto</span>
                                                <input type="tinyint" placeholder="postiletto" name="postiletto" required>
					</div>
                                    <div class="input-box">
						<span class="details">wifi</span>
                                                <input type="tinyintt" placeholder="wifi" name="wifi" required>
					</div>
				 <div class="input-box">
						<span class="details">angolostudio</span>
                                                <input type="tinyint" placeholder="angolostudio" name="angolostudio" required>
					</div>
                                     <div class="input-box">
						<span class="details">climatizzatore</span>
                                                <input type="tinyint" placeholder="climatizzatore" name="climatizzatore" required>
					</div>
                                    <div class="input-box">
						<span class="details">etamin</span>
                                                <input type="int" placeholder="etamin" name="etamin" required>
					</div>
                                    <div class="input-box">
						<span class="details">etamax</span>
                                                <input type="int" placeholder="etamax" name="etamax" required>
					</div>
                                    <div class="input-box">
						<span class="details">tipologia</span>
                                                <input type="tinyint" placeholder="tipologia" name="tipologia" required>
					</div>
                                    <div class="input-box">
						<span class="details">descrizione</span>
                                                <input type="text" placeholder="descrizione" name="descrizione" required>
					</div>
                                    <div class="input-box">
						<span class="details">utenze</span>
                                                <input type="text" placeholder="utenze" name="utenze" required>
					</div>
                                    <div class="input-box">
						<span class="details">via</span>
                                                <input type="varchar(20)" placeholder="via" name="via" required>
					</div>
                                </div>
				

				

				<div class="button">
					<input type="submit" value="inserisci">
				</div>
			</form>
		</div>
        
        <script src="js/registration_form.js"></script>
	</body>
</html>