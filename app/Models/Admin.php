<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

namespace App\Models;

use App\Models\Resources\Faq;
use App\Models\Resources\Annuncio;
use App\Models\Resources\Operazione;
use App\Models\Resources\Foto;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class Admin {

    protected $_res;

    // public function getutente() {
    //  return utente::where('username','prova0')->get();
    // }

    public function getAnnuncioById($id) {
        return $annunci = Annuncio::where('idannuncio', $id)->get();
    }

    public function getFaq() {
        return Faq::all();
    }

    public function getAnnunciPaginati($num) {
        $annunci = Annuncio::paginate($num);
        return $annunci;
    }

    public function getAnnunci() {
        return Annuncio::all();
    }

    public function getAnnunciOpzionati() {
        return (Operazione::where('descrizione', "opzionamento")->get());
    }

    public function getFoto() {
        return Foto::all();
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
    public function getAnnunciLocati2($res) {
        $disponibilita = '0';
        return $res->filter(function ($ann)use ($disponibilita) {
                    return (($ann->disponibilita == $disponibilita));
                });
    }

    public function getAnnunciLocati() {
        $disponbilita = '0';
        return (Annuncio::where('disponibilita', $disponbilita)->get());
    }

    public function getAnnunciFiltroTipo($tipologia, $res2) {

        return $res2->filter(function ($ann)use ($tipologia) {
                    return (($ann->tipologia == $tipologia));
                });
    }

    public function getFiltroDataIn($mydatetime, $res) {
        $prova = Carbon::parse($mydatetime);
        $mydatetime = $prova->format('Y-m-d 00:00:00');
        return $res->filter(function ($ann)use ($mydatetime) {
                    return(\Carbon\Carbon::parse($ann->created_at)->gte($mydatetime));
                });
    }

    public function getFiltroDataOut($mydatetime, $res) {
        $prova = Carbon::parse($mydatetime);
        $mydatetime = $prova->format('Y-m-d 00:00:00');
        return $res->filter(function ($ann)use ($mydatetime) {
                    return(\Carbon\Carbon::parse($ann->created_at)->lte($mydatetime));
                });
    }

    public function getFiltroDataInLocati($mydatetime, $res) {
        $prova = Carbon::parse($mydatetime);
        $mydatetime = $prova->format('Y-m-d 00:00:00');
        return $res->filter(function ($ann)use ($mydatetime) {
                    return(\Carbon\Carbon::parse($ann->datacc)->gte($mydatetime));
                });
    }

    public function getFiltroDataOutLocati($mydatetime, $res) {
        $prova = Carbon::parse($mydatetime);
        $mydatetime = $prova->format('Y-m-d 00:00:00');
        return $res->filter(function ($ann)use ($mydatetime) {
                    return(\Carbon\Carbon::parse($ann->datacc)->lte($mydatetime));
                });
    }

    public function getFiltroDataInOpzionati($mydatetime, $operazioni) {
        return $operazioni->filter(function ($op)use ($mydatetime) {
                    return(\Carbon\Carbon::parse($op->created_at)->gte($mydatetime));
                });
    }

    public function getFiltroDataOutOpzionati($mydatetime, $operazioni) {
        return $operazioni->filter(function ($op)use ($mydatetime) {
                    return(\Carbon\Carbon::parse($op->created_at)->lte($mydatetime));
                });
    }
    
    public function elfaq($idfaq) {
        return $res = FAQ::where('idfaq', $idfaq)->delete();
    }

    public function getfaqbyid($idfaq) {
        return $faq = FAQ::where('idfaq', $idfaq)->get();
    }

    public function modfaq($idfaq, $domanda, $risposta, $categoria) {
        $faq = FAQ::where('idfaq', $idfaq)->get();
        FAQ::where('idfaq', $idfaq)->delete();

        $f = new Faq();
        $f->idfaq = $idfaq;
        $f->domanda = $domanda;
        $f->risposta = $risposta;
        $f->categoria = $categoria;
        $f->updated_at = now();
        $f->created_at = $f->save();
    }

}
