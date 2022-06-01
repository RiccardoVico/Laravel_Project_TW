<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>HomeAdmin</title>

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/theme.css">

    </head>
    <body>

        <!-- Back to top button -->
        <div class="back-to-top"></div>

        <header>
            <div id="menu">
                @include('layouts/navadmin')
            </div>

            <div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url(images/stats.jpg)"  >;
                <div class="container h-100">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-lg-8">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
                                    <li class="breadcrumb-item"><a href="../public">HomeAdmin</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Statistiche</li>
                                  
                                </ol>
                                 <h1 class="fg-white text-center">Statistiche</h1>
                            </nav>
                            
                        </div>
                    </div>
                </div>
            </div> <!-- .page-banner -->
        </header>

        <main>
            <main>
                       <center>
<h5> Opzioni filtraggio</h5>
{{ Form::open(array('route' => 'statistiche', 'class' => 'contact-form')) }}
  Tipologia appartamento<br>
   {{ Form::label('tipo', 'Appartamento', ['class' => 'label-input']) }}
   {{ Form::radio('tipo', '0', ['class' => 'input','id' => 'tipo']) }}
   {{ Form::label('tipo', 'PostoLetto', ['class' => 'label-input']) }}
   {{ Form::radio('tipo', '1', ['class' => 'input','id' => 'tipo']) }}
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
</form></center>
            </main>
            <main>
                <p>Totale annunci presenti nel sito</p>
                            <?php echo($count);?></main>
        </main>




