<?php

namespace App\Http\Controllers;

use App\Annuncio;

class LocatoreController extends Controller
{
    function index(){
        return view('/register');
    }

    public function inserisciannuncio() { 

        $utente = new Annuncio();
        
        $utente->idannuncio = request('idannuncio');
        $utente->nomeannuncio = request('nomeannuncio');
        $utente->canoneaffitto = request('canoneaffitto');
        $utente->cap = request('cap');
        $utente->numerocivico = request('numerocivico');
        $utente->citta = request('citta');
        $utente->disponibilita = request('disponibilita');
        $utente->datacc = request('datacc');
        $utente->superficie = request('superificie');
        $utente->postiletto = request('postiletto');
        $utente->wifi = request('wifi');
        $utente->angolostudio = request('angolostudio');
        $utente->climatizzatore = request('climatizzatore');
        $utente->etamin = request('etamin');
        $utente->etamax = request('etamax');
        $utente->tipologia = request('tipologia');
         $utente->descrizione = request('descrizione');
        $utente->utenze = request('utenze');
        $utente->via = request('via');
      

        $utente->save();

        return redirect('/locatore');                         
    }
}
