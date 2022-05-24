@extends('layouts.locatario')

@section('title', 'Home')

@section('content')
<div class="page-section" style="background-color:#E6E6FA">
    <div class="container">
        <div class="col text-center pb-3">
            <form method="post" action="admin.blade.php" >
    <h3>Applica filtri</h3>
    <input type="radio" name="type" id="1" name="appartamento" value="appartamento"><label class="mx-2" for="appartamento"> Appartamento</label><input type="radio" name="type" id="postoletto" name="postoletto" value="Car"><label class="mx-2" for="postoletto"> Posto Letto</label>
    <br><input type="checkbox" id="3" name="WIFI" value="WIFI"><label class="mx-2" for="WIFI"> WIFI</label><input type="checkbox" id="4" name="climatizzatore" value="climatizzatore"><label class="mx-2" for="climatizzatore">Climatizzatore</label><br>
    <input type="checkbox" id="5" name="angolostudio" value="angolostudio"><label class="mx-2" for="angolostudio">Angolo Studio</label><br>
    <button type="submit">Filtra</button>
</form>
@include('layouts/catalogo')
        </div>
    </div>
</div>
@endsection