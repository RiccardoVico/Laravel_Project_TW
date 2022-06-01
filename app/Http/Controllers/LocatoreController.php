<?php

namespace App\Http\Controllers;
use App\Operazione;
use App\Annuncio;
use App\Models\Catalog;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Carbon\Carbon;
class LocatoreController extends Controller
{
    function index(){
        return view('/register');
    }
    protected $_catalogModel;

    public function __construct() {
        $this->_catalogModel = new Catalog();
    }
    

    public function inserisciannuncio() { 

        $utente = new Annuncio();
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
        $prova=Carbon::parse(now());
        $mydatetime=$prova->format('Y-m-d 00:00:00');
        $utente->created_at=$mydatetime;
        $utente->updated_at=$mydatetime;
        $utente->in_at=request('in_at');
        $utente->out_at=request('out_at');
        $nome=request('nomeannuncio');
        $utente->save();
       
         return redirect('storagein/'.$nome);

        
    }
    public function inserimentoperazione(){
       $utente2=new Operazione();
       $name=request('nome');
       $id=$this->_catalogModel->getidannuncio(request('nome'));
       $utente2->descrizione='inserimento';
       $prova=Carbon::parse(now());
       $mydatetime=$prova->format('Y-m-d 00:00:00');
       $utente2->data=$mydatetime;
       $utente2->idutente=auth()->user()->id;
       $utente2->idannuncio=$id;
       $utente2->save();
    }
    

}
