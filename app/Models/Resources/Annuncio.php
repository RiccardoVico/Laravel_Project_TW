<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
namespace  App\Models\Resources;
use Illuminate\Database\Eloquent\Model;

class Annuncio extends Model {
    
    protected $table = 'annuncio';
    
    protected $primaryKey = 'idannuncio';
    
    protected $fillable = [
        'idannuncio','cap','numerocivico','citta','disponibilita','datacc','superifice','postiletto',
        'wifi','angolostudio','climatizzatore','etamin','etamax','tipologia','descrizione','utenze','via'
    ];
    
    public $timestamps = false;

}