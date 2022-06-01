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
           {{ Form::open(array('route' => 'insfaq', 'class' => 'contact-form')) }}
				
				<div class="user-details">
					
					<div class="input-box">
						
						 {{ Form::label('domanda', 'domanda', ['class' => 'label-input']) }}
                                                 {{ Form::text('domanda','', ['class' => 'input','id' => 'domanda']) }}
                                                @if ($errors->first('domanda'))
                                                <ul class="errors">
                                                @foreach ($errors->get('domanda') as $message)
                                                <li>{{ $message }}</li>
                                                 @endforeach
                                                 </ul>
                                                @endif
					</div>
					<div class="input-box">
						
						  {{ Form::label('risposta', 'rispostacompleta', ['class' => 'label-input']) }}
                                                 {{ Form::text('risposta', '', ['class' => 'input','id' => 'risposta']) }}
                                                  @if ($errors->first('risposta'))
                                                   <ul class="errors">
                                                   @foreach ($errors->get('risposta') as $message)
                                                   <li>{{ $message }}</li>
                                                   @endforeach
                                                   </ul>
                                                    @endif
                        
					</div>
					<div class="input-box">
						 {{ Form::label('categoria', 'rispostabreve', ['class' => 'label-input']) }}
                                                 {{ Form::text('categoria', '', ['class' => 'input','id' => 'categoria']) }}
						 @if ($errors->first('categoria'))
                                                 <ul class="errors">
                                                 @foreach ($errors->get('categoria') as $message)
                                                 <li>{{ $message }}</li>
                                                 @endforeach
                                                 </ul>
                                                 @endif
                        
					
					
					</div>
				</div>

				

				<div class="button">
					<input type="submit" value="inseriscifaq">
                                        
				</div>
			 {{ Form::close() }}
		</div>
        
        <script src="js/registration_form.js"></script>
	</body>
</html>