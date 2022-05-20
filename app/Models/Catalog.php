<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */namespace App\Models;
use App\Models\Resources\utente;

class Catalog{
    public function getutente(){
        return utente::where('username','prova0')->get();
    }
}

