<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annuncio extends Model
{  
    protected $table = 'annuncio';
    

    protected $fillable = [
        'idannuncio','cap','numerocivico','citta','disponibilita','datacc','superifice','postiletto',
        'wifi','angolostudio','climatizzatore','etamin','etamax','tipologia','descrizione','utenze','via'
    ];

    public $timestamps = false;
}