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

class Cat2{
    protected $_res;
   // public function getutente() {
      //  return utente::where('username','prova0')->get();
   // }
    
     public function getAnnunciById($id){
         return $annunci = Annuncio::where('idannuncio', $id)->get();
    }
    
    public function getfaq() {
    return faq::all();}

    //}                                     //(spostare)
    
    public function getAnnunci() {
        return Annuncio::all();
    }
    public function getAnnunciOpzionati(){
        $opzionato="opzionato";
        return (Operazione::where('descrizione',$opzionato)->get());
    }
      public function getAnnunciLocati(){
        $disponbilita='0';
        return (Annuncio::where('disponibilita',$disponbilita)->get());
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
          return($ann->created_at->gte($mydatetime));
                    
    
    });}
       public function getFiltroDataInOpzionati($mydatetime,$res){
      $prova=Carbon::parse($mydatetime);
      $mydatetime=$prova->format('Y-m-d 00:00:00');
      return $res->filter(function($op)use ($mydatetime){
          return($op->created_at->gte($mydatetime));
                    
    
       });
    }
      public function getFiltroDataOutOpzionati($mydatetime,$res){
      $prova=Carbon::parse($mydatetime);
      $mydatetime=$prova->format('Y-m-d 00:00:00');
      return $res->filter(function($op)use ($mydatetime){
          return($op->created_at->lte($mydatetime));
                    
    
       });
    }
     public function getFiltroDataInLocati($mydatetime,$res){
      $prova=Carbon::parse($mydatetime);
      $mydatetime=$prova->format('Y-m-d 00:00:00');
      $rest4= new Collection;
     foreach($res as $r){
          if(($r->disponibilita==0)&& (\Carbon\Carbon::parse($r->datacc)->gte($mydatetime)))
      $rest4->add($r);
        return $rest4;
     }}
    
      public function getFiltroDataOut($mydatetime,$res){
      $prova=Carbon::parse($mydatetime);
      $mydatetime=$prova->format('Y-m-d 00:00:00');
      return $res->filter(function($ann)use ($mydatetime){
          return($ann->created_at->lte($mydatetime));
                    
    
    });}
      public function getFiltroDataOutLocati($mydatetime2,$res2){
         $prova=Carbon::parse($mydatetime2);
      $mydatetime2=$prova->format('Y-m-d 00:00:00');
      $rest4= new Collection;
     foreach($res2 as $r){
          if(($r->disponibilita==0)&& (\Carbon\Carbon::parse($r->datacc)->lte($mydatetime2))){
     $rest4->add($r);}}
        return $rest4;
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
        public function getAnnunciFiltroTipoA($tipologia,$res2){
       
        return $res2->filter(function($ann)use ($tipologia){
          return $ann->tipologia==$tipologia;
        });}
         public function getAnnunciFiltroTipoP($tipologia,$res2){
       
        return $res2->filter(function($ann)use ($tipologia){
          return $ann->tipologia==$tipologia;
        });}
        
         public function getAnnunciFiltroTipoLocati($tipologia,$res2){
       
        return $res2->filter(function($ann)use ($tipologia){
          return (($ann->tipologia==$tipologia)&&$ann->disponibilita=='0');
        });
    }
     public function getAnnunciFiltroLocati($res2){
          $opzionato='0';
         return (Annuncio::where('disponibilita',$opzionato)->get());
    }
    public function getAnnunciFiltroTipoOpzionati($tipologia,$res2){
       
        return $res2->filter(function($op)use ($tipologia){
          return (($op->tipologia==$tipologia)&&$ann->disponibilita=='0');
        });
    }
  
}
    
