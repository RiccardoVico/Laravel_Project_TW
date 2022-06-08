<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model {

    protected $table = 'foto';
    
    protected $primaryKey = 'idfoto';
    
    protected $fillable = [
        'idfoto', 'idannuncio', 'idutente', 'descrizione'
    ];
    
    public $timestamps = false;

}
