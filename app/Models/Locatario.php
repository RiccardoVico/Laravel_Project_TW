<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

namespace App\Models;

use App\Models\Resources\Annuncio;
use App\Models\Resources\Operazione;
use App\Models\Resources\Foto;
use Carbon\Carbon;

class Locatario {

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
    
    public function getAnnunciFiltroPosto($posto, $res) {
        $totale = $res;
        return $totale->filter(function ($ann)use ($posto) {
                    return $ann->postiletto == $posto;
                });
    }

    public function getAnnunciFiltroPrezzoMax($prezzomax, $prova1) {
        $totale = $prova1;
        return $totale->filter(function ($ann)use ($prezzomax) {

                    return (((int) $ann->canoneaffitto) <= $prezzomax);
                });
    }

    public function getAnnunciFiltroPrezzoMin($prezzomin, $prova1) {
        $totale = $prova1;
        return $totale->filter(function ($ann)use ($prezzomin) {
                    return (((int) $ann->canoneaffitto) >= $prezzomin);
                });
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

    public function getAnnunciFiltroTipo($tipologia) {
        $totale = Annuncio::all();

        return $totale->filter(function ($ann)use ($tipologia) {
                    return $ann->tipologia == $tipologia;
                });
    }

    public function getFiltroPeriodo($periodo, $res) {
        $totale = $res;
        return $totale->filter(function ($ann)use ($periodo) {
                    return $ann->periodod == $periodo;
                });
    }

    public function getFiltroDataIn($mydatetime, $res2) {
        $prova = Carbon::parse($mydatetime);
        $mydatetime = $prova->format('Y-m-d 00:00:00');
        return $res2->filter(function ($ann)use ($mydatetime) {
                    if ((\Carbon\Carbon::parse($ann->in_at))->lte($mydatetime) && (\Carbon\Carbon::parse($ann->out_at))->gte($mydatetime)) {
                        return $ann;
                    }
                });
    }

    public function getFiltroDataOut($mydatetime2, $res2) {
        $prova = Carbon::parse($mydatetime2);
        $mydatetime2 = $prova->format('Y-m-d 00:00:00');
        return $res2->filter(function ($ann)use ($mydatetime2) {
                    if ((\Carbon\Carbon::parse($ann->out_at))->gte($mydatetime2) && (\Carbon\Carbon::parse($ann->in_at))->lte($mydatetime2)) {
                        return $ann;
                    }
                });
    }

    public function getAnnunciFiltroSuperficie($superficie, $res2) {
        $totale = $res2;
        return $totale->filter(function ($ann)use ($superficie) {
                    return $ann->superficie >= $superficie;
                });
    }

    public function getAnnunciFiltroPostiLettoTotali($postilettototali, $res2) {
        $totale = $res2;
        return $totale->filter(function ($ann)use ($postilettototali) {
                    return $ann->postiletto >= $postilettototali;
                });
    }

    public function getAnnuncioFiltroStanzasingola($res2, $tipostanzas) {
        $totale = $res2;
        return $totale->filter(function ($ann)use ($tipostanzas) {
                    return $ann->tipo_stanza == 1;
                });
    }

    public function getAnnuncioFiltroStanzadoppia($res2, $tipostanzad) {
        $totale = $res2;
        return $totale->filter(function ($ann)use ($tipostanzad) {
                    return $ann->tipo_stanza == 2;
                });
    }

    public function getAnnuncioFiltroLettiCamera($res2, $numeroletticamera) {
        $totale = $res2;
        return $totale->filter(function ($ann)use ($numeroletticamera) {
                    return $ann->numeroletticamera >= $numeroletticamera;
                });
    }

    public function getAnnuncioFiltroAngoloStudios($res2, $angolostudios) {
        $totale = $res2;
        return $totale->filter(function ($ann)use ($angolostudios) {
                    return $ann->angolostudio == '1';
                });
    }

    public function getAnnuncioAngoloStudion($res2, $angolostudion) {
        $totale = $res2;
        return $totale->filter(function ($ann)use ($angolostudion) {
                    return $ann->angolostudio == 0;
                });
    }

    public function getAnnuncioFiltroNumeroCamere($res2, $numerocamere) {
        $totale = $res2;
        return $totale->filter(function ($ann)use ($numerocamere) {
                    return $ann->numerototalicamere >= $numerocamere;
                });
    }

    public function getAnnuncioFiltroCucinas($res2, $cucinas) {
        $totale = $res2;
        return $totale->filter(function ($ann)use ($cucinas) {
                    return $ann->cucina == '1';
                });
    }

    public function getAnnuncioFiltroCucinan($res2, $cucinan) {
        $totale = $res2;
        return $totale->filter(function ($ann)use ($cucinan) {
                    return $ann->cucina == '0';
                });
    }

    public function getAnnuncioFiltroBalcones($res2, $balcones) {
        $totale = $res2;
        return $totale->filter(function ($ann)use ($balcones) {
                    return $ann->balcone == '1';
                });
    }

    public function getAnnuncioFiltroBalconen($res2, $balconen) {
        $totale = $res2;
        return $totale->filter(function ($ann)use ($balconen) {
                    return $ann->balcone == '0';
                });
    }

    public function getAnnuncioFiltroLocales($res2, $localers) {
        $totale = $res2;
        return $totale->filter(function ($ann)use ($localers) {
                    return $ann->localericrativo == '1';
                });
    }

    public function getAnnuncioFiltroLocaler($res2, $localern) {
        $totale = $res2;
        return $totale->filter(function ($ann)use ($localern) {
                    return $ann->localericrativo == '0';
                });
    }

    public function getAnnuncioFiltroWiFis($res2, $wifis) {
        $totale = $res2;
        return $totale->filter(function ($ann)use ($wifis) {
                    return $ann->wifi == $wifis;
                });
    }

    public function getAnnuncioFiltroWifin($res2, $wifin) {
        $totale = $res2;
        return $totale->filter(function ($ann)use ($wifin) {
                    return $ann->localericrativo == $wifin;
                });
    }

    public function getAnnuncioFiltroLavatrices($res2, $lavatrices) {
        $totale = $res2;
        return $totale->filter(function ($ann)use ($lavatrices) {
                    return $ann->lavatrice == '1';
                });
    }

    public function getAnnuncioFiltroLavatricer($res2, $lavatricen) {
        $totale = $res2;
        return $totale->filter(function ($ann)use ($lavatricen) {
                    return $ann->lavatrice == '0';
                });
    }

    public function getAnnuncioFiltroLavastovs($res2, $lavastovs) {
        $totale = $res2;
        return $totale->filter(function ($ann)use ($lavastovs) {
                    return $ann->lavastov == '1';
                });
    }

    public function getAnnuncioFiltroLavastovr($res2, $lavastovn) {
        $totale = $res2;
        return $totale->filter(function ($ann)use ($lavastovn) {
                    return $ann->lavastov == '0';
                });
    }

}
