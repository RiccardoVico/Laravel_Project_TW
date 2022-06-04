@include('layouts/navadmin')
@include('layouts.admin')

@section('title', 'Stats')

            

        <
        <body>              <center>
<h5> Opzioni filtraggio</h5>
{{ Form::open(array('route' => 'statistiche', 'class' => 'contact-form')) }}
  Tipologia appartamento<br>
   {{ Form::label('tipoa', 'Appartamento', ['class' => 'label-input']) }}
   {{ Form::checkbox('tipoa', '0', ['class' => 'input','id' => 'tipoa']) }}
   {{ Form::label('tipop', 'PostoLetto', ['class' => 'label-input']) }}
   {{ Form::checkbox('tipop', '1', ['class' => 'input','id' => 'tipop']) }}
   <br>
   {{ Form::label('mydatetime', 'DataInizio', ['class' => 'label-input']) }}
   {{ Form::date('mydatetime', '', ['class' => 'input','id' => 'mydatetime']) }}
    {{ Form::label('mydatetime2', 'DataFine', ['class' => 'label-input']) }}
   {{ Form::date('mydatetime2', '', ['class' => 'input','id' => 'mydatetime2']) }}
    
                 {{ Form::submit('Filtra', ['class' => 'form-btn1']) }}
            
            
            {{ Form::close() }}

  <!--<select name="tipo">
      <option value=''></option>
  <option value='0'>appartamento</option>
  <option value='1'>posto letto</option>
  </select><br>
  Periodo temporale<br>
  <input type="date" name="mydatetime" min><span>DataInizio</span>
  <input type="date" name="mydatetime2" min><span>DataFine</span>
  <button type="submit">Filtra</button>
  -->
  
                <p>Totale annunci presenti nel sito</p>
                       <?php echo($count);?>
               <p> Totale offerte di locazione fatte dai potenziali locatari<p>
                <?php echo($count3);?>
               <p>Totale alloggi locati</p>
               <?php echo($count4);
             ?>
                
        </main>


    </body>
</div>
</html>
 

