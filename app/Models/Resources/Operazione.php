<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
namespace  App\Models\Resources;
use Illuminate\Database\Eloquent\Model;

class Operazione extends Model {
    
    protected $table='operazione';
    
    protected $primaryKey='idoperazione';
    
    protected $fillable = [
        'idoperazione','data','','descrizione','username','idannuncio',
    ];
    
    public $timestamps = false;
}