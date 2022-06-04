<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */namespace App\Models;
use App\Models\Resources\utente;
use App\Models\Resources\faq;
use App\Models\Resources\Annuncio;
use App\Models\Resources\Operazione;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;


class cat3{
    protected $_res;
   // public function getutente() {
      //  return utente::where('username','prova0')->get();
   // }
 
   
    
     public function getAnnunciById($id){
         return $annunci = Annuncio::where('idannuncio', $id)->get();
    }
    
    public function getfaq() {
    return faq::all();}
       public function getAnnunci() {
        return Annuncio::all();
    }
      public function getAnnunciOpzionati(){
        $opzionato="opzionato";
        return (Operazione::where('descrizione',$opzionato)->get());
    }
     public function getAnnunciLocati2($res){
        $disponibilita='0';
         return $res->filter(function($ann)use ($disponibilita){
          return (($ann->disponibilita==$disponibilita));
        });
    }
      public function getAnnunciLocati(){
        $disponbilita='0';
        return (Annuncio::where('disponibilita',$disponbilita)->get());
    }
     public function getAnnunciFiltroTipo($tipologia,$res2){
       
        return $res2->filter(function($ann)use ($tipologia){
          return (($ann->tipologia==$tipologia));
        });
    }
       public function getFiltroDataIn($mydatetime,$res){
      $prova=Carbon::parse($mydatetime);
      $mydatetime=$prova->format('Y-m-d 00:00:00');
      return $res->filter(function($ann)use ($mydatetime){
          return($ann->created_at->gte($mydatetime));
                    
    
    });}
       public function getFiltroDataOut($mydatetime,$res){
      $prova=Carbon::parse($mydatetime);
      $mydatetime=$prova->format('Y-m-d 00:00:00');
      return $res->filter(function($ann)use ($mydatetime){
          return($ann->created_at->lte($mydatetime));
                    
    
    });}
        public function getFiltroDataInLocati($mydatetime,$res){
      $prova=Carbon::parse($mydatetime);
      $mydatetime=$prova->format('Y-m-d 00:00:00');
      return $res->filter(function($ann)use ($mydatetime){
          return(\Carbon\Carbon::parse($ann->datacc)->gte($mydatetime));
                    
    
    });}
         public function getFiltroDataOutLocati($mydatetime,$res){
      $prova=Carbon::parse($mydatetime);
      $mydatetime=$prova->format('Y-m-d 00:00:00');
      return $res->filter(function($ann)use ($mydatetime){
          return(\Carbon\Carbon::parse($ann->datacc)->lte($mydatetime));
                    
    
    });}
    public function getFiltroDataInOpzionati($mydatetime,$operazioni){
        return $operazioni->filter(function($op)use ($mydatetime){
          return($op->created_at->gte($mydatetime));
                    
     });}
      public function getFiltroDataOutOpzionati($mydatetime,$operazioni){
        return $operazioni->filter(function($op)use ($mydatetime){
          return($op->created_at->lte($mydatetime));
                    
     });}
 
                
    
}