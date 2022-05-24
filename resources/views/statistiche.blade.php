<h5> Opzioni filtraggio</h5>
<form method="post" action="admin.blade.php" >
  Tipologia appartamento<br>
  <select name="tipologia appartamento">
  <option value="I">appartamento</option>
  <option value="E">posto letto</option>
  </select><br>
  Periodo temporale<br>
  <select name="Periodo temporale">
   <option value="1">1 mese</option>
  <option value="3">3 mesi</option>
   <option value="6">6 mesi</option>
  <option value="9">9 mesi</option>
   <option value="12">1 anno</option>
  <option value="24">2 anni</option>
   <option value="36">3 anni</option>
  </select><br>
  <button type="submit">Invia i dati</button>
  
</form>
<?php
echo('totale annunci presenti nel sito');
echo($count);
?>