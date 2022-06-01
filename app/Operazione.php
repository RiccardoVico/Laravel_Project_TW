<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operazione extends Model
{  
    protected $table = 'operazione';
    

    protected $fillable = [
        'idoperazione','data','','descrizione','username','idannuncio',
    ];

    public $timestamps = false;
}