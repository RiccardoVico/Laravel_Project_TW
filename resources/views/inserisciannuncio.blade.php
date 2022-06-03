<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/registration_form.css">
        
        <title>Inserimento Annuncio</title>
	</head>
	<body>
		<div class="registration_container">
			<div class="title">InserisciAnnuncio</div>
                          
                
                             {{ Form::open(array('route' => 'inserimentoann', 'id' => 'add', 'files' => true, 'class' => 'contact-form')) }}
				
				<div class="user-details">
					
                                    <div class="input-box">
						
						{{ Form::label('nomeannuncio', 'nomeannuncio', ['class' => 'label-input']) }}
                                                 {{ Form::text('nomeannuncio','', ['class' => 'input','id' => 'nomeannuncio']) }}
					</div>
                                     <div class="input-box">
						
						{{ Form::label('canoneaffitto', 'canoneaffitto', ['class' => 'label-input']) }}
                                                 {{ Form::text('canoneaffitto','', ['class' => 'input','id' => 'canoneaffitto']) }}
					</div>
					<div class="input-box">
						
						{{ Form::label('cap', 'cap', ['class' => 'label-input']) }}
                                                 {{ Form::text('cap','', ['class' => 'input','id' => 'cap']) }}
					</div>
                                    <div class="input-box">
						
						{{ Form::label('numerocivico', 'numerocivico', ['class' => 'label-input']) }}
                                                 {{ Form::text('numerocivico','', ['class' => 'input','id' => 'numerocivico']) }}
					</div>
					<div class="input-box">
						
						{{ Form::label('citta', 'citta', ['class' => 'label-input']) }}
                                                 {{ Form::text('citta','', ['class' => 'input','id' => 'citta']) }}
					</div>
                                    <div class="input-box">
						
                                                {{ Form::label('wifi', 'wifi presente', ['class' => 'label-input']) }}
                                                {{ Form::radio('wifi', '0', ['class' => 'input','id' => 'wifi']) }}
                                                {{ Form::label('wifi', 'wifi non presente', ['class' => 'label-input']) }}
                                                {{ Form::radio('wifi', '1', ['class' => 'input','id' => 'wifi']) }}
					</div>
				 <div class="input-box">
						
                                                {{ Form::label('angolostudio', ' angolo studio non presente', ['class' => 'label-input']) }}
                                                {{ Form::radio('angolostudio', '0', ['class' => 'input','id' => 'angolostudio']) }}
                                                {{ Form::label('angolostudio', 'angolo studio presente', ['class' => 'label-input']) }}
                                                {{ Form::radio('angolostudio', '1', ['class' => 'input','id' => 'angolostudio']) }}
					</div>
                                     <div class="input-box">
						
                                                {{ Form::label('climatizzatore', 'climatizzatore non presente', ['class' => 'label-input']) }}
                                                {{ Form::radio('climatizzatore', '0', ['class' => 'input','id' => 'climatizzatore']) }}
                                                {{ Form::label('climatizzatore', ' climatizzatore presente', ['class' => 'label-input']) }}
                                                {{ Form::radio('climatizzatore', '1', ['class' => 'input','id' => 'climatizzatore']) }}
					</div>
                                    <div class="input-box">
						
                                                {{ Form::label('etamin', 'etamin', ['class' => 'label-input']) }}
                                                 {{ Form::number('etamin','', ['class' => 'input','id' => 'etamin']) }}
					</div>
                                    <div class="input-box">
						{{ Form::label('etamax', 'etamax', ['class' => 'label-input']) }}
                                                 {{ Form::number('etamax','', ['class' => 'input','id' => 'etamax']) }}
					</div>
                                    <div class="input-box">
						
                                                {{ Form::label('tipologia', 'appartamento', ['class' => 'label-input']) }}
                                                {{ Form::radio('tipologia', '0', ['class' => 'input','id' => 'tipologia']) }}
                                                {{ Form::label('tipologia', 'posto letto', ['class' => 'label-input']) }}
                                                {{ Form::radio('tipologia', '1', ['class' => 'input','id' => 'tipologia']) }}
					</div>
                                    <div class="input-box">
						
                                                 {{ Form::label('descrizione', 'descrizione', ['class' => 'label-input']) }}
                                                 {{ Form::text('descrizione','', ['class' => 'input','id' => 'descrizione']) }}
					</div>
                                    <div class="input-box">
						
                                                  {{ Form::label('utenze', 'utenze', ['class' => 'label-input']) }}
                                                 {{ Form::text('utenze','', ['class' => 'input','id' => 'utenze']) }}
					</div>
                                    <div class="input-box">
					
                                                {{ Form::label('via', 'via', ['class' => 'label-input']) }}
                                                 {{ Form::text('via','', ['class' => 'input','id' => 'via']) }}
					</div>
                                    <div class="input-box">
						
                                                  {{ Form::label('in_at', 'in_at', ['class' => 'label-input']) }}
                                                 {{ Form::date('in_at','', ['class' => 'input','id' => 'in_at']) }}
					</div>
                                    <div class="input-box">
						
                                                  {{ Form::label('out_at', 'out_at', ['class' => 'label-input']) }}
                                                 {{ Form::date('out_at','', ['class' => 'input','id' => 'out_at']) }}
					</div>
                                    <div class="input-box">
                                        { Form::label('image', 'Immagine', ['class' => 'label-input']) }}
                                        {{ Form::file('image','', ['class' => 'input','id' => 'image']) }}
                                    
                                </div>
				

				

				<div class="button">
                                    <input type="submit" value="inserisciAnnuncio">
					
				</div>
                              {{ Form::close() }}
			</form>
		</div>
        
        <script src="js/registration_form.js"></script>
	</body>
</html>