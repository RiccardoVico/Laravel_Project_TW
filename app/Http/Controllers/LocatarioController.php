<?php

namespace App\Http\Controllers;

use  App\Http\Controllers\Controller;
use App\Models\Catalog;

class locatarioController extends Controller {
    protected $_catalogModel;

    public function __construct() {
        $this->_catalogModel = new Catalog();
    }

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
}