<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utente extends Model
{  
    protected $table = 'utente';
    

    protected $fillable = [
        'username','nome','cognome','recapito','tipologia','password','cittainteresse','via',
        'citta','numerocivico','cap','provincia','paese','mail'
    ];

    public $timestamps = false;
}
