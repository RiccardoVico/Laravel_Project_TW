<?php

namespace App\Http\Controllers;

use  App\Http\Controllers\Controller;
use App\Models\Catalog;
use App\Utente;
use App\Http\Requests\newF;
class locatarioController extends Controller {
    protected $_catalogModel;

    public function __construct() {
        $this->_catalogModel = new Catalog();
    }
/*
    public function showfiltro(){    
        $prova=request('tipologia');
        $res=$this->_catalogModel->getAnnunciFiltroPosto($prova);
        return view('provafiltro')
                ->with('annuncifiltro',$res);
    }
   
    public function showfiltroPrezzoMax(){
        $prova=request('prezzomax');
        $res=$this->_catalogModel->getAnnunciFiltroPrezzoMax($prova);
        return view('provafiltro')
                ->with('annuncifiltro',$res);
    }
    public function showfiltroPrezzoMin(){
        $prova=request('prezzomin');
        $res=$this->_catalogModel->getAnnunciFiltroPrezzoMin($prova);
        return view('provafiltro')
                ->with('annuncifiltro',$res);
    }
    public function showfiltroPeriodo(){
        $prova=request('periodo');
        $res=$this->_catalogModel->getAnnunciFiltroPrezzoMin($prova);
        return view('provafiltro')
                ->with('annuncifiltro',$res);
    }
    public function showfiltro(newF $request){
        $prezzomax=request('prezzomax');
        $prezzomin=request('prezzomin');
        $posto=request('posto');
        $mydatetime=request('mydatetime');
        $mydatetime2=request('mydatetime2');
        $tipo=request('fittizio');
        $superificie=request('superificie');
        $tipostanzas=request('tipostanzas');
        $tipostanzad=request('tipostanzad');
        $res2=$this->_catalogModel->getAnnunciFiltroTipo($tipo);
        if(isset($prezzomin)){
        $res2=$this->_catalogModel->getAnnunciFiltroPrezzoMin($prezzomin,$res2);
        }
        if(isset($prezzomax)){
        $res2=$this->_catalogModel->getAnnunciFiltroPrezzoMax($prezzomax, $res2);
        }
        //if(isset($posto)){
        //$res2=$this->_catalogModel->getAnnunciFiltroPosto($posto,$res2);
        //}
       if(isset($mydatetime)){
       $res2=$this->_catalogModel->getFiltroDataIn($mydatetime, $res2);
       }
       if(isset($mydatetime2)){
       $res2=$this->_catalogModel->getFiltroDataOut($mydatetime2 ,$res2);
       }
       if(isset($superificie)){
       $res2=$this->_catalogModel->getFiltroSuperficie($superificie ,$res2);
       }
        if(isset($postilettototali)){
       $res2=$this->_catalogModel->getFiltroPostiLettoTotali($postilettototali ,$res2);
       }
       if((isset($tipostanzas)&& isset($tipostanzad))||(!isset($tipostanzas)&& !isset($tipostanzad))){
           
           $res2=$res2;
       }
       else{
           if(isset($tipostanzas)){
             $res2=$this->_catalogModel-> getAnnuncioFiltroStanzasingola($res2,$tipostanzas);
           }
           if(isset($tipostanzad)){
              $res2=$this->_catalogModel-> getAnnuncioFiltroStanzadoppia($res2,$tipostanzad);
           }
       }
        return view('catalogo')
        ->with('annunci',$res2);}
        public function showfiltroPeriodo(){
        
        $prova=request('periodo');
        $res=$this->_catalogModel->getAnnunciFiltroPrezzoMin($prova);
        return view('provafiltro')
        ->with('annuncifiltro',$res);}
 * 
 */
        
}