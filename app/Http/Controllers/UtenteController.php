<?php

namespace App\Http\Controllers;

use App\Utente;

class UtenteController extends Controller
{
    function index(){
        return view('/register');
    }

    public function store() { 

        $utente = new Utente();
        
        $utente->username = request('username');
        $utente->nome = request('nome');
        $utente->cognome = request('cognome');
        $utente->recapito = request('recapito');
        $utente->tipologia = request('tipologia');
        $utente->password = request('password');
        $utente->cittainteresse = request('cittainteresse');
        $utente->via = request('via');
        $utente->citta = request('citta');
        $utente->numerocivico = request('numerocivico');
        $utente->cap = request('cap');
        $utente->provincia = request('provincia');
        $utente->paese = request('paese');
        $utente->mail = request('mail');

        $utente->save();

        return redirect('/');                         
    }
}
