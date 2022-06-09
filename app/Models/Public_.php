<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

namespace App\Models;

use App\Models\Resources\utente;
use App\Models\Resources\Faq;
use App\Models\Resources\Annuncio;
use App\Models\Resources\Operazione;
use App\Models\Resources\Foto;
use App\Models\Resources\Messaggio;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class Public_ {

    public function getAnnuncioByName($name) {
        return Annuncio::where('nomeannuncio', $name)->get();
    }
    
    public function getAnnuncioById($id) {
        return $annunci = Annuncio::where('idannuncio', $id)->get();
    }
    
    public function getIdAnnuncio($name) {
        return Annuncio::where('nomeannuncio', $name)->value('idannuncio');
    }

    public function getFaq() {
        return Faq::all();
    }
    
    public function getFoto() {
        return Foto::all();
    }
    
    public function getFotoByIdAnnuncio($idAnnuncio) {
        return Foto::where('idannuncio', $idAnnuncio)->get();
    }

    public function getAnnunciPaginati($num) {
        $annunci = Annuncio::paginate($num);
        return $annunci;
    }

    public function getAnnunci() {
        return Annuncio::all();
    }
    
    public function getUltimiAnnunci($num) {
        return Annuncio::latest()->take($num)->get();
    }
    
    public function getOperazioni() {
        return Operazione::all();
    }
    
    public function getOpzionatoAnnuncio($idAnnuncio, $idUtente) {
        $opzionato = False;
        $operazione = Operazione::where('idannuncio', $idAnnuncio)->get();
        if($operazione != null && !$operazione->isEmpty()) {
            $operazione = $operazione->where('idutente', $idUtente);
            if($operazione != null && !$operazione->isEmpty()) {
                $operazione = $operazione->where('descrizione', "opzionamento");
                $opzionato = True;
            }
        }
        return $opzionato;    
    }
    
    public function addOperazione($idAnnuncio, $idUtente, $descrizione) {
        $operazione = new Operazione();
        $operazione->idannuncio = $idAnnuncio;
        $operazione->descrizione = $descrizione;
        $data = Carbon::parse(now());
        $mydatetime = $data->format('Y-m-d 00:00:00');
        $operazione->data = $mydatetime;
        $operazione->idutente = $idUtente;
        $operazione->save();
    }
    
    public function deleteOperazione($idAnnuncio, $idUtente, $descrizione) {
        $operazione = Operazione::where('idannuncio', $idAnnuncio)->get();
        if($operazione != null && !$operazione->isEmpty()) {
            $operazione = $operazione->where('idutente', $idUtente);
            if($operazione != null && !$operazione->isEmpty()) {
                $operazione = $operazione->where('descrizione', $descrizione);
                if($operazione != null && !$operazione->isEmpty()) {
                    $operazione = $operazione->first();
                    Operazione::where('idoperazione',$operazione->idoperazione)->delete();
                }
            }
        }   
    }
    
    public function getUtenti() {
        return utente::all();
    }
    
    public function getutente($id) {
        return utente::where('id',$id)->get();
    }
    
    public function getuserbyid($userId) {
    return utente::where('id', $userId)->get()->first();
}

    public function getOperazioniOpziona() {
        $totop = Operazione::all();
        return $totop->filter(function ($ann) {
                    return ($ann->descrizione == "opzionamento" );
                });
    }

    public function getOperazioniOpzionaId($idannuncio) {

        ($tot = Operazione::where('idannuncio', $idannuncio)->get());
        return $tot->filter(function ($ann) {
                    return ($ann->descrizione == 'opzionato' );
                });
    }

    public function getAnnunciOpzionati($annunci, $operazioni) {
        $res = new Collection;

        foreach ($operazioni as $operazione) {
            foreach ($annunci as $annuncio) {
                foreach ($annuncio as $an)
                    if (($operazione->idannuncio == $an->idannuncio)) {
                        $res->add($annuncio);
                    }
            }
        }
        echo( $res);
    }

    public function getAnnuncioFiltroEtaMin($res2, $etamin) {
        $totale = $res2;
        return $totale->filter(function ($ann)use ($etamin) {
                    return $ann->etamin <= $etamin;
                });
    }

    public function getAnnuncioFiltroEtaMax($res2, $etamax) {
        $totale = $res2;
        return $totale->filter(function ($ann)use ($etamax) {
                    return $ann->etamax >= $etamax;
                });
    }
    
    public function getMessaggi() {
        return Messaggio::all();
    }

    public function getMessaggiInviatiByUserId($userId) {
        return Messaggio::where('idutente1', $userId)->get();
    }

    public function getMessaggiRicevutiByUserId($userId) {
        return Messaggio::where('idutente2', $userId)->get();
    }

    public function getMessaggiByTwoUsers($userId, $userId2) {
        $messaggi = Messaggio::where('idutente1', $userId)->get()->where('idutente2', $userId2);
        $messaggi2 = Messaggio::where('idutente1', $userId2)->get()->where('idutente2', $userId);
        return $messaggi->merge($messaggi2);
    }

    public function getMessaggiByUserId($userId) {
        $messaggi = Messaggio::where('idutente1', $userId)->get();
        return $messaggi->merge(Messaggio::where('idutente2', $userId)->get());
    }

    public function createMessaggio($userId, $userId2, $request) {
        $messaggio = new Messaggio;
        $messaggio->idutente1 = $userId;
        $messaggio->idutente2 = $userId2;
        $messaggio->testo = $request->testo;
        $messaggio->data = Carbon::parse(now())->format('Y-m-d H:i:s');

        $messaggio->save();
    }

}
