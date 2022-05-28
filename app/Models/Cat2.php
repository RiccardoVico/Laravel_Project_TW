<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */namespace App\Models;
use App\Models\Resources\utente;
use App\Models\Resources\faq;
use App\Models\Resources\Annuncio;

class Cat2{
    protected $_res;
    public function getutente() {
        return utente::where('username','prova0')->get();
    }
    
    public function getfaq() {
        return faq::all();
    }                                     //(spostare)
    
    public function getAnnunci() {
        return Annuncio::all();
    }
    public function getAnnunciFiltroPosto($posto){
       $totale=Annuncio::all();
        return $totale->filter(function($ann)use ($posto){
           return $ann->tipologia==$posto;
    });}
    public function getAnnunciFiltroPrezzoMax($prezzomax){
        $totale=Annuncio::all();
        return $totale->filter(function($ann)use ($prezzomax){
            return $ann->canoneaffitto<=$prezzomax;
    });}
         public function getAnnunciFiltroPrezzoMin($prezzomin){
        $totale=Annuncio::all();
        return $totale->filter(function($ann)use ($prezzomin){
            return $ann->canoneaffitto>=$prezzomin;
        });
    }
    public function getFiltroPeriodo($periodo){
        $totale=Annuncio::all();
        return $totale->filter(function($ann)use ($periodo){
            return $ann->superficie=$periodo;
        });
    }
    
}