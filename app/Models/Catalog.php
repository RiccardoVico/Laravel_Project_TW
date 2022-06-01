<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */namespace App\Models;
use App\Models\Resources\utente;
use App\Models\Resources\faq;
use App\Models\Resources\Annuncio;
use Carbon\Carbon;
class Catalog {
    protected $_res;
    public function getannuncio($name) {
        
        return Annuncio::where('nomeannuncio',$name)->get();
    }
    public function getidannuncio($name){
         return Annuncio::where('nomeannuncio',$name)->value('idannuncio');
    }
    
    public function getfaq() {
        return faq::all();
    }                                     //(spostare)
    
    public function getAnnunci() {
        return Annuncio::all();
    }
    public function getAnnunciFiltroPosto($posto,$res){
        $totale=$res;
        return $totale->filter(function($ann)use ($posto){
           return $ann->postiletto==$posto;
    });}
    public function getAnnunciFiltroPrezzoMax($prezzomax,$prova1){
        $totale=$prova1;
        return $totale->filter(function($ann)use ($prezzomax){
            
            return (((int) $ann->canoneaffitto)<=$prezzomax);
    });}
         public function getAnnunciFiltroPrezzoMin($prezzomin,$prova1){
        $totale=$prova1;
        return $totale->filter(function($ann)use ($prezzomin){
            return $ann->canoneaffitto>=$prezzomin;
        });
    }
      public function getAnnunciFiltroTipo($tipologia){
        $totale=Annuncio::all();
     
        return $totale->filter(function($ann)use ($tipologia){
            return $ann->tipologia==$tipologia;
        });
    }
    public function getFiltroPeriodo($periodo,$res){
        $totale=$res;
        return $totale->filter(function($ann)use ($periodo){
        return $ann->periodod==$periodo;
        });
    }
    public function getFiltroDataIn($mydatetime,$res2){
          $prova=Carbon::parse($mydatetime);
    $mydatetime=$prova->format('Y-m-d 00:00:00');
    return $res2->filter(function($ann)use ($mydatetime){
        if((\Carbon\Carbon::parse($ann->in_at))->lte($mydatetime)&& (\Carbon\Carbon::parse($ann->out_at))->gte($mydatetime)){
        return $ann;
        }
       
    });
    }
     public function getFiltroDataOut($mydatetime2,$res2){
           $prova=Carbon::parse($mydatetime2);
    $mydatetime2=$prova->format('Y-m-d 00:00:00');
    return $res2->filter(function($ann)use ($mydatetime2){
        if((\Carbon\Carbon::parse($ann->out_at))->gte($mydatetime2)&& (\Carbon\Carbon::parse($ann->in_at))->lte($mydatetime2)){
        return $ann;
        }
       
    });
    }
      public function getAnnunciFiltroSuperficie($superficie,$res2){
        $totale=$res2;
        return $totale->filter(function($ann)use ($superificie){
            return $ann->superificie>=$superificie;
      });}
       public function getAnnunciFiltroPostiLettoTotali($postilettototali,$res2){
        $totale=$res2;
        return $totale->filter(function($ann)use ($postilettototali){
            return $ann->postiletto>=$postilettototali;
      });}
      
  public function getAnnuncioFiltroStanzasingola($res2,$tipostanzas){
       $totale=$res2;
        return $totale->filter(function($ann)use ($tipostanzas){
            return $ann->tipo_stanza==$tipostanzas;
            });}
       public function getAnnuncioFiltroStanzadoppia($res2,$tipostanzad){
       $totale=$res2;
        return $totale->filter(function($ann)use ($tipostanzad){
            return $ann->tipo_stanza==2;
            });}
  
    }
    
    


