<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    
 protected $table = 'faq';
    protected $fillable = [
        'idfaq','domanda','risposta','categoria'
    ];

    public $timestamps = false;
}
