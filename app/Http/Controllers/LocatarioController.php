<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Locatario;
use App\Http\Requests\newF;

class LocatarioController extends Controller {

    protected $_locatarioModel;

    public function __construct() {
        $this->middleware('can:isLocatario');
        $this->_locatarioModel = new Locatario();
    }

    function index($annunci = 0) {
        if($annunci == 0) {
            if(strcmp($annunci, "niente") == 0) {
                return view('locatario_home');
            }
            $annunci = $this->_locatarioModel->getAnnunciPaginati(2);
        } else {
            $annunci = explode(",", $annunci);
            $annunci = $this->_locatarioModel->getAnnunciPaginatiById($annunci, 2);
        }
        $foto = $this->_locatarioModel->getFoto();
        return view('locatario_home')
                        ->with('annunci', $annunci)
                        ->with('foto', $foto);
    }

    //public function showfiltro(){    
    // $prova=request('tipologia');
    //  $res=$this->_catalogModel->getAnnunciFiltroPosto($prova);
    // return view('provafiltro')
    //        ->with('annuncifiltro',$res);
    // }

    public function showfiltroPrezzoMax() {
        $prova = request('prezzomax');
        $res = $this->_locatarioModel->getAnnunciFiltroPrezzoMax($prova);
        return view('provafiltro')
                        ->with('annuncifiltro', $res);
    }

    public function showfiltroPrezzoMin() {
        $prova = request('prezzomin');
        $res = $this->_locatarioModel->getAnnunciFiltroPrezzoMin($prova);
        return view('provafiltro')
                        ->with('annuncifiltro', $res);
    }
    
    public function showAnnunciFiltrati(newF $request) {
        $prezzomax = request('prezzomax');
        $prezzomin = request('prezzomin');
        $posto = request('posto');
        $mydatetime = request('mydatetime');
        $mydatetime2 = request('mydatetime2');
        $tipo = request('fittizio');
        $superficie = request('superficie');
        $tipostanzas = request('tipostanzas');
        $tipostanzad = request('tipostanzad');
        $postilettototali = request('postilettototali');
        $numeroletticamera = request('letticamera');
        $angolostudion = request('angolostudion');
        $angolostudios = request('angolostudios');
        $numerocamere = request('numerocamere');
        $cucinan = request('cucinan');
        $cucinas = request('cucinas');
        $localers = request('localers');
        $localern = request('localern');
        $lavatrices = request('lavatrices');
        $lavatricen = request('lavatricen');
        $lavastovs = request('lavastovs');
        $lavastovn = request('lavastovn');
        $etamin = request('etamin');
        $etamax = request('etamax');
        $wifis = request('wifis');
        $wifin = request('wifin');
        $balcones = request('balcones');
        $balconen = request('balconen');
        $res2 = $this->_locatarioModel->getAnnunciFiltroTipo($tipo);
        if (isset($prezzomin)) {
            $res2 = $this->_locatarioModel->getAnnunciFiltroPrezzoMin($prezzomin, $res2);
        }
        if (isset($prezzomax)) {
            $res2 = $this->_locatarioModel->getAnnunciFiltroPrezzoMax($prezzomax, $res2);
        }
        if (isset($etamin)) {
            $res2 = $this->_locatarioModel->getAnnuncioFiltroEtaMin($res2, $etamin);
        }
        if (isset($etamax)) {
            $res2 = $this->_locatarioModel->getAnnuncioFiltroEtaMax($res2, $etamax);
        }
        //if(isset($posto)){
        //$res2=$this->_locatarioModel->getAnnunciFiltroPosto($posto,$res2);
        //}
        if (isset($mydatetime)) {
            $res2 = $this->_locatarioModel->getFiltroDataIn($mydatetime, $res2);
        }
        if (isset($mydatetime2)) {
            $res2 = $this->_locatarioModel->getFiltroDataOut($mydatetime2, $res2);
        }
        if (isset($superficie)) {
            $res2 = $this->_locatarioModel->getAnnunciFiltroSuperficie($superficie, $res2);
        }
        if (isset($postilettototali)) {
            $res2 = $this->_locatarioModel->getAnnunciFiltroPostiLettoTotali($postilettototali, $res2);
        }
        if ((isset($tipostanzas) && isset($tipostanzad)) || (!isset($tipostanzas) && !isset($tipostanzad))) {

            $res2 = $res2;
        } else {
            if (isset($tipostanzas)) {
                $res2 = $this->_locatarioModel->getAnnuncioFiltroStanzasingola($res2, $tipostanzas);
            }
            if (isset($tipostanzad)) {
                $res2 = $this->_locatarioModel->getAnnuncioFiltroStanzadoppia($res2, $tipostanzad);
            }
        }
        if (isset($numeroletticamera)) {
            $res2 = $this->_locatarioModel->getAnnuncioFiltroLettiCamera($res2, $numeroletticamera);
        }
        if ((isset($angolostudios) && isset($angolostudion)) || (!isset($angolostudios) && !isset($angolostudion))) {

            $res2 = $res2;
        } else {
            if (isset($angolostudios)) {
                $res2 = $this->_locatarioModel->getAnnuncioFiltroAngoloStudios($res2, $angolostudios);
            }
            if (isset($angolostudion)) {
                $res2 = $this->_locatarioModel->getAnnuncioAngoloStudion($res2, $angolostudion);
            }
        }
        if (isset($numerocamere)) {
            $res2 = $this->_locatarioModel->getAnnuncioFiltroNumeroCamere($res2, $numerocamere);
        }
        if ((isset($wifis) && isset($wifin)) || (!isset($wifis) && !isset($wifin))) {

            $res2 = $res2;
        } else {
            if (isset($wifis)) {
                $res2 = $this->_locatarioModel->getAnnuncioFiltroWifis($res2, $wifis);
            }
            if (isset($wifin)) {
                $res2 = $this->_locatarioModel->getAnnuncioFiltroWifin($res2, $wifin);
            }
        }
        if ((isset($balcones) && isset($balconen)) || (!isset($balcones) && !isset($balconen))) {

            $res2 = $res2;
        } else {
            if (isset($balcones)) {
                $res2 = $this->_locatarioModel->getAnnuncioFiltroBalcones($res2, $balcones);
            }
            if (isset($balconen)) {
                $res2 = $this->_locatarioModel->getAnnuncioFiltroBalconen($res2, $balconen);
            }
        }

        if ((isset($cucinas) && isset($cucinan)) || (!isset($cucinas) && !isset($cucinan))) {

            $res2 = $res2;
        } else {
            if (isset($cucinas)) {
                $res2 = $this->_locatarioModel->getAnnuncioFiltroCucinas($res2, $cucinas);
            }
            if (isset($cucinan)) {
                $res2 = $this->_locatarioModel->getAnnuncioFiltroCucinan($res2, $cucinan);
            }
        }
        if ((isset($localers) && isset($localern)) || (!isset($localers) && !isset($localern))) {

            $res2 = $res2;
        } else {
            if (isset($localers)) {
                $res2 = $this->_locatarioModel->getAnnuncioFiltroLocales($res2, $localers);
            }
            if (isset($localern)) {
                $res2 = $this->_locatarioModel->getAnnuncioFiltroLocaler($res2, $localern);
            }
        }
        if ((isset($lavatrices) && isset($lavatricen)) || (!isset($lavatrices) && !isset($lavatricen))) {

            $res2 = $res2;
        } else {
            if (isset($lavatrices)) {
                $res2 = $this->_locatarioModel->getAnnuncioFiltroLavatrices($res2, $lavatrices);
            }
            if (isset($lavatricen)) {
                $res2 = $this->_locatarioModel->getAnnuncioFiltroLavatricer($res2, $lavatricen);
            }
        }
        if ((isset($lavastovs) && isset($lavastovn)) || (!isset($lavastovs) && !isset($lavastovn))) {

            $res2 = $res2;
        } else {
            if (isset($lavastovs)) {
                $res2 = $this->_locatarioModel->getAnnuncioFiltroLavastovs($res2, $lavatrices);
            }
            if (isset($lavastovn)) {
                $res2 = $this->_locatarioModel->getAnnuncioFiltroLavastovr($res2, $lavastovn);
            }
        }
        $annunci = $res2->pluck('idannuncio')->toArray();
        if(!$annunci) {
            $annunci = "niente";
        } else {
            $annunci = implode(",", $annunci);
        }
        return redirect()->action('LocatarioController@index', ['annunci' => $annunci]);
        
//        $foto = $this->_locatarioModel->getFoto();
//        return view('locatario_home')
//                        ->with('annunci', $annunci)
//                        ->with('foto', $foto);
    }

    //  public function showfiltroPeriodo(){
    // $prova=request('periodo');
    // $res=$this->_catalogModel->getAnnunciFiltroPrezzoMin($prova);
    // return view('provafiltro')
    //->with('annuncifiltro',$res);}
}
