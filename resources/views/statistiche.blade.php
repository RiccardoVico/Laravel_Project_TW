@include('layouts/navadmin')
@include('layouts.admin')

@section('title', 'Stats')

                
<body>         
              
              <?php 
              if(isset($count)){
                  echo("Totale annunci inseriti nello slot temporale specificato");
               echo('<br>');
              echo($count);}?>
              <p>Totale richieste fatte dai potenziali locatari</p>
              <?php echo($count4);?>
              <p>Totale alloggi locati</p>
              <?php echo($count3);?>
                   
              <p>TOTALE ALLOGGI</p>
                 <?php  echo($count5);?>
        </main>

   <footer class="page-footer">
        </footer>

    </body>
</html>
