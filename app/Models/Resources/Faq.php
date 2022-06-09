<?php



/*
* Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
* Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
*/
namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model{

    protected $table = 'faq';
    protected $primaryKey = 'idfaq';
    protected $fillable = [
        'idfaq', 'domanda', 'risposta', 'categoria'
    ];

    public $timestamps=false;
}
