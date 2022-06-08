<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

namespace App\Models;

use App\Models\Resources\Annuncio;
use App\Models\Resources\Operazione;
use App\Models\Resources\Foto;

class Locatore {

    public function getAnnuncioById($id) {
        return $annunci = Annuncio::where('idannuncio', $id)->get();
    }

    public function getAnnunciPaginati($num) {
        $annunci = Annuncio::paginate($num);
        return $annunci;
    }

    public function getAnnunci() {
        return Annuncio::all();
    }

    public function getAnnunciOpzionati() {
        return (Operazione::where('descrizione', "opzionato")->get());
    }
    
    public function getAnnunciPaginatiById($idannunci, $num) {
        $annunci = Annuncio::whereIn('idannuncio', $idannunci);
        return $annunci->paginate($num);
    }
    
    public function getIdAnnuncio($name) {
        return Annuncio::where('nomeannuncio', $name)->value('idannuncio');
    }
    
    public function getOperazioni() {
        return Operazione::all();
    }
    
    public function getOperazioniByIdAnnuncio($idAnnuncio) {
        $operazioni = Operazione::where('idannuncio', $idAnnuncio);
        return $operazioni;
    }

    public function getOperazioniInserimentoFiltro($operazioni) {
        return $operazioni->filter(function ($op) {
                    return $op->descrizione == 'inserimento';
                });
    }
    
    public function getFoto() {
        return Foto::all();
    }
    
    public function deleteAnnuncioById($id) {
        Annuncio::where('idannuncio', $id)->delete();
    }
    
    public function deleteOperazioniByIdAnnuncio($id) {
        Operazione::where('idannuncio', $id)->delete();
    }
    
    public function deleteFotoByIdAnnuncio($id) {
        Foto::where('idannuncio', $id)->delete();
    }

}
