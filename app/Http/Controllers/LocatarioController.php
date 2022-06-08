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

    //public function showfiltro(){    
       // $prova=request('tipologia');
      //  $res=$this->_catalogModel->getAnnunciFiltroPosto($prova);
       // return view('provafiltro')
        //        ->with('annuncifiltro',$res);
   // }
   
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
   // public function showfiltroPeriodo(){
     //   $prova=request('periodo');
     //   $res=$this->_catalogModel->getAnnunciFiltroPrezzoMin($prova);
      //  return view('provafiltro')
      //          ->with('annuncifiltro',$res);
  //  }
    public function showfiltro(newF $request){
        $prezzomax=request('prezzomax');
        $prezzomin=request('prezzomin');
        $posto=request('posto');
        $mydatetime=request('mydatetime');
        $mydatetime2=request('mydatetime2');
        $tipo=request('fittizio');
        $superficie=request('superficie');
        $tipostanzas=request('tipostanzas');
        $tipostanzad=request('tipostanzad');
        $postilettototali=request('postilettototali');
        $numeroletticamera=request('letticamera');
        $angolostudion=request('angolostudion');
        $angolostudios=request('angolostudios');
        $numerocamere=request('numerocamere');
        $cucinan=request('cucinan');
        $cucinas=request('cucinas');
        $localers=request('localers');
        $localern=request('localern');
        $lavatrices=request('lavatrices');
        $lavatricen=request('lavatricen');
         $lavastovs=request('lavastovs');
        $lavastovn=request('lavastovn');
        $etamin=request('etamin');
        $etamax=request('etamax');
        $wifis=request('wifis');
        $wifin=request('wifin');
        $balcones=request('balcones');
        $balconen=request('balconen');
        $res2=$this->_catalogModel->getAnnunciFiltroTipo($tipo);
        if(isset($prezzomin)){
        $res2=$this->_catalogModel->getAnnunciFiltroPrezzoMin($prezzomin,$res2);
        }
        if(isset($prezzomax)){
        $res2=$this->_catalogModel->getAnnunciFiltroPrezzoMax($prezzomax, $res2);
        }
        if(isset($etamin)){
        $res2=$this->_catalogModel->getAnnuncioFiltroEtaMin($res2, $etamin);
        }
        if(isset($etamax)){
        $res2=$this->_catalogModel->getAnnuncioFiltroEtaMax($res2, $etamax);
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
       if(isset($superficie)){
       $res2=$this->_catalogModel->getAnnunciFiltroSuperficie($superficie,$res2);
       }
        if(isset($postilettototali)){
      $res2=$this->_catalogModel->getAnnunciFiltroPostiLettoTotali($postilettototali,$res2);
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
       if(isset($numeroletticamera)){
       $res2=$this->_catalogModel->getAnnuncioFiltroLettiCamera($res2,$numeroletticamera);}
       if((isset($angolostudios)&& isset($angolostudion))||(!isset($angolostudios)&& !isset($angolostudion))){
           
           $res2=$res2;
       }
       else{
           if(isset($angolostudios)){
             $res2=$this->_catalogModel-> getAnnuncioFiltroAngoloStudios($res2,$angolostudios);
           }
           if(isset($angolostudion)){
              $res2=$this->_catalogModel-> getAnnuncioAngoloStudion($res2,$angolostudion);
           }
       }
       if(isset($numerocamere)){
       $res2=$this->_catalogModel->getAnnuncioFiltroNumeroCamere($res2,$numerocamere);}
       if((isset($wifis)&& isset($wifin))||(!isset($wifis)&& !isset($wifin))){
           
           $res2=$res2;
       }
       else{
           if(isset($wifis)){
             $res2=$this->_catalogModel-> getAnnuncioFiltroWifis($res2,$wifis);
           }
           if(isset($wifin)){
              $res2=$this->_catalogModel-> getAnnuncioFiltroWifin($res2,$wifin);
           }
       }
       if((isset($balcones)&& isset($balconen))||(!isset($balcones)&& !isset($balconen))){
           
           $res2=$res2;
       }
       else{
           if(isset($balcones)){
             $res2=$this->_catalogModel-> getAnnuncioFiltroBalcones($res2,$balcones);
           }
           if(isset($balconen)){
              $res2=$this->_catalogModel-> getAnnuncioFiltroBalconen($res2,$balconen);
           }
       }
       
       if((isset($cucinas)&& isset($cucinan))||(!isset($cucinas)&& !isset($cucinan))){
           
           $res2=$res2;
       }
       else{
           if(isset($cucinas)){
             $res2=$this->_catalogModel-> getAnnuncioFiltroCucinas($res2,$cucinas);
           }
           if(isset($cucinan)){
              $res2=$this->_catalogModel-> getAnnuncioFiltroCucinan($res2,$cucinan);
           }
       }
       if((isset($localers)&& isset($localern))||(!isset($localers)&& !isset($localern))){
           
           $res2=$res2;
       }
       else{
           if(isset($localers)){
             $res2=$this->_catalogModel-> getAnnuncioFiltroLocales($res2,$localers);
           }
           if(isset($localern)){
              $res2=$this->_catalogModel-> getAnnuncioFiltroLocaler($res2,$localern);
           }
       }
       if((isset($lavatrices)&& isset($lavatricen))||(!isset($lavatrices)&& !isset($lavatricen))){
           
           $res2=$res2;
       }
       else{
           if(isset($lavatrices)){
             $res2=$this->_catalogModel-> getAnnuncioFiltroLavatrices($res2,$lavatrices);
           }
           if(isset($lavatricen)){
              $res2=$this->_catalogModel-> getAnnuncioFiltroLavatricer($res2,$lavatricen);
           }
       }
       if((isset($lavastovs)&& isset($lavastovn))||(!isset($lavastovs)&& !isset($lavastovn))){
           
           $res2=$res2;
       }
       else{
           if(isset($lavastovs)){
             $res2=$this->_catalogModel->getAnnuncioFiltroLavastovs($res2,$lavatrices);
           }
           if(isset($lavastovn)){
              $res2=$this->_catalogModel->getAnnuncioFiltroLavastovr($res2,$lavastovn);
           }
       }
       
         return view('prova2')
         ->with('annunci',$res2);
           }
      //  public function showfiltroPeriodo(){
       // $prova=request('periodo');
       // $res=$this->_catalogModel->getAnnunciFiltroPrezzoMin($prova);
       // return view('provafiltro')
        //->with('annuncifiltro',$res);}
 
        
}