
@extends('layouts.public')

@section('title', 'ModFaq')
@section('content')   
  
        @foreach($faq as $f)
        
        <?php  
        
                $domanda=$f->domanda;
                $idfaq=$f->idfaq;
                $risposta=$f->risposta;
                $categoria=$f->categoria;?>
        @endforeach
        <center>
        <div class="registration_container">
            <div class="title">MODIFICA FAQ</div>
           {{ Form::open(array('route' => ['modfaq2', 'idfaq'=>$idfaq], 'class' => 'contact-form')) }}

            <div class="user-details">

                <div class="input-box">

                    {{ Form::label('domanda', 'DOMANDA ', ['class' => 'label-input']) }}
                    {{ Form::textarea('domanda',$domanda, ['class' => 'input','id' => 'domanda']) }}
                    @if ($errors->first('domanda'))
                    <ul class="errors">
                        @foreach ($errors->get('domanda') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                <div class="input-box">

                    {{ Form::label('risposta', ' RISPOSTA', ['class' => 'label-input']) }}
                    {{ Form::textarea('risposta', $risposta, ['class' => 'input','id' => 'risposta']) }}
                    @if ($errors->first('risposta'))
                    <ul class="errors">
                        @foreach ($errors->get('risposta') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif

                </div>
                <div class="input-box">
                    {{ Form::label('categoria', 'RI BREVE', ['class' => 'label-input']) }}
                    {{ Form::textarea('categoria', $categoria, ['class' => 'input','id' => 'categoria']) }}
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
                <input type="submit" value="salva modifiche">

            </div>
            {{ Form::close() }}
        </div>

        <script src="js/registration_form.js"></script>
        </center>
@endsection











