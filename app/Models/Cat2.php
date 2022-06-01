<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */namespace App\Models;
use App\Models\Resources\utente;
use App\Models\Resources\faq;
use App\Models\Resources\Annuncio;
use Carbon\Carbon;

class Cat2{
    protected $_res;
   // public function getutente() {
      //  return utente::where('username','prova0')->get();
   // }
    
    public function getfaq() {
    return faq::all();}

    //}                                     //(spostare)
    
    public function getAnnunci() {
        return Annuncio::all();
    }
   
    //public function getAnnunciFiltroPrezzoMax($prezzomax){
       //return $pp='ciao';
        //return $totale->filter(function($ann)use ($prezzomax){
        //return $ann->canoneaffitto<=$prezzomax;
    //});
    
    //}
         //public function getAnnunciFiltroPrezzoMin($prezzomin){
        //$totale=Annuncio::all();
        //return $totale->filter(function($ann)use ($prezzomin){
           // return $ann->canoneaffitto>=$prezzomin;
        //});
    //}
    public function getFiltroDataIn($mydatetime,$res){
      $prova=Carbon::parse($mydatetime);
      $mydatetime=$prova->format('Y-m-d 00:00:00');
      return $res->filter(function($ann)use ($mydatetime){
          return($ann->updated_at->gte($mydatetime));
                    
    
       });
    }
      public function getFiltroDataOut($mydatetime2,$res2){
        $prova=Carbon::parse($mydatetime2);
        $mydatetime2=$prova->format('Y-m-d 00:00:00');
        return $res2->filter(function($ann)use ($mydatetime2){
         return($ann->updated_at->lte($mydatetime2));
                    
    
    });
    }
    //public function getFiltroDataIn($mydatatime,$res2){
      //  $totale=Annuncio::all();
       // foreach($ann as $totale)
       // return ($ann->updatedat->get($mydatatime));
        
    //}
   // public function getAnnunciFiltroPosto($posto){
      // return $tot='ciaomarty';
        //return $tot2->filter(function($ann)use($posto){
          //  return $ann->postiletto=$posto;
  //  });
        public function getAnnunciFiltroTipo($tipologia,$res2){
       
        return $res2->filter(function($ann)use ($tipologia){
          return $ann->tipologia==$tipologia;
        });
    }
  
}
    
