<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
namespace  App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Messaggio extends Model {

    protected $table='messaggio';
    protected $primaryKey='idmessaggio';
    public $timestamps=false;
}