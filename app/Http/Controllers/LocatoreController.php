<?php

namespace App\Http\Controllers;

use App\Models\Resources\Operazione;
use App\Models\Resources\Annuncio;
use App\Models\Resources\Foto;
use App\Models\Locatore;
use App\Http\Controllers\Controller;
use App\Http\Requests\AnnRequest;
use Carbon\Carbon;
use Illuminate\Support\Str;
use File;

class LocatoreController extends Controller {

    protected $_locatoreModel;

    public function __construct() {
        $this->middleware('can:isLocatore');
        $this->_locatoreModel = new Locatore();
    }
    
    function index() {
        $annunci = $this->_locatoreModel->getAnnunciPaginati(2);
        $foto = $this->_locatoreModel->getFoto();
        return view('locatore_home')
                        ->with('annunci', $annunci)
                        ->with('foto', $foto);
    }
    
    public function gestisciOfferte($userId, $opzionati) {
        $operazioni = $this->_locatoreModel->getOperazioni()->where('idutente', $userId);
        $operazioni = $this->_locatoreModel->getOperazioniInserimentoFiltro($operazioni);
        $annunci = $this->_locatoreModel->getAnnunciPaginatiById($operazioni->pluck('idannuncio')->toArray(), 2);
        if($opzionati) {
            $operazioni = $this->_locatoreModel->getOperazioni()->whereIn('idannuncio', $operazioni->pluck('idannuncio')->toArray());
            $operazioni = $operazioni->where('descrizione', "opzionamento");
            $annunci = $this->_locatoreModel->getAnnunciPaginatiById($operazioni->pluck('idannuncio')->toArray(), 2);
        }
        $foto = $this->_locatoreModel->getFoto();
        return view('gestisci_offerte')
                        ->with('annunci', $annunci)
                        ->with('opzionati', $opzionati)
                        ->with('foto', $foto);
    }

    public function inserisciAnnuncio() {
        return view('inserisci_annuncio');
    }
    
    public function storeAnnuncio(AnnRequest $request) {
        $annuncio = new Annuncio();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $request->file('image')->getClientOriginalExtension();
            $imageName = auth()->user()->id.Str::random(10).'.'.$extension;
        } else {
            $imageName = NULL;
        }
        if (!is_null($imageName)) {
            $destinationPath = public_path() . '/images/annunci';
            $image->move($destinationPath, $imageName);
        }
        $annuncio->nomeannuncio = $request->nomeannuncio;
        $annuncio->canoneaffitto = $request->canoneaffitto;
        $annuncio->cap = $request->cap;
        $annuncio->numerocivico = $request->numerocivico;
        $annuncio->citta = $request->citta;
        $annuncio->datacc = null;
        $annuncio->superficie = $request->superficie;
        $annuncio->postiletto = $request->postiletto;
        $annuncio->wifi = $request->wifi;
        $annuncio->climatizzatore = $request->climatizzatore;
        $annuncio->etamin = $request->etamin;
        $annuncio->etamax = $request->etamax;
        $annuncio->genere = $request->genere;
        $annuncio->tipologia = $request->tipologia;
        $annuncio->descrizione = $request->descrizione;
        $annuncio->utenze = $request->utenze;
        $annuncio->via = $request->via;
        $annuncio->numerototalicamere = $request->numerototalicamere;
        $prova = Carbon::parse(now());
        $mydatetime = $prova->format('Y-m-d 00:00:00');
        $annuncio->created_at = $mydatetime;
        $annuncio->updated_at = $mydatetime;
        $annuncio->in_at = $request->in_at;
        $annuncio->out_at = $request->out_at;
        $annuncio->balcone = $request->balcone;
        if($annuncio->tipologia == 1) { // posto letto
            $annuncio->numeroletticamera = $request->numeroletticamera;
            $annuncio->angolostudio = $request->angolostudio;
            $annuncio->tipo_stanza = $request->tipo_stanza;
            $annuncio->numerototalicamere = -1;
            $annuncio->lavastov = -1;
            $annuncio->lavatrice = -1;
            $annuncio->cucina = -1;
            $annuncio->localericrativo = -1;
            $annuncio->parcheggio = -1;
        }
        if($annuncio->tipologia == 0) { // appartamento
            $annuncio->numeroletticamera = -1;
            $annuncio->angolostudio = -1;
            $annuncio->tipo_stanza = -1;
            $annuncio->lavastov = $request->lavastov;
            $annuncio->lavatrice = $request->lavatrice;
            $annuncio->cucina = $request->cucina;
            $annuncio->localericrativo = $request->localericreativo;
            $annuncio->parcheggio = $request->parcheggio;
        }
        
        
        $annuncio->save();
        
        $this->inserimentoOperazione($request);
        $this->salvaFoto($request, $imageName);

        return redirect()->action('LocatoreController@index');
    }
    
    public function modificaAnnuncio($annuncioId) {
        $annuncio = $this->_locatoreModel->getAnnuncioById($annuncioId)->first();
        return view('modifica_annuncio')
                        ->with('annuncio', $annuncio);        
    }
    
    public function salvaModificheAnnuncio(AnnRequest $request, $annuncioId) {
        $annuncio = $this->_locatoreModel->getAnnuncioById($annuncioId)->first();
        $annuncio->nomeannuncio = $request->nomeannuncio;
        $annuncio->canoneaffitto = $request->canoneaffitto;
        $annuncio->cap = $request->cap;
        $annuncio->numerocivico = $request->numerocivico;
        $annuncio->citta = $request->citta;
        $annuncio->superficie = $request->superficie;
        $annuncio->postiletto = $request->postiletto;
        $annuncio->wifi = $request->wifi;
        $annuncio->climatizzatore = $request->climatizzatore;
        $annuncio->etamin = $request->etamin;
        $annuncio->etamax = $request->etamax;
        $annuncio->genere = $request->genere;
        $annuncio->tipologia = $request->tipologia;
        $annuncio->descrizione = $request->descrizione;
        $annuncio->utenze = $request->utenze;
        $annuncio->via = $request->via;
        $annuncio->numerototalicamere = $request->numerototalicamere;
        $time = strtotime($request->in_at);
        $newformat = date('Y-m-d 00:00:00',$time);
        $annuncio->in_at = $newformat;
        $time2 = strtotime($request->out_at);
        $newformat2 = date('Y-m-d 00:00:00',$time2);
        $annuncio->out_at = $newformat2;
        $annuncio->balcone = $request->balcone;
        if($annuncio->tipologia == 1) { // posto letto
            $annuncio->numeroletticamera = $request->numeroletticamera;
            $annuncio->angolostudio = $request->angolostudio;
            $annuncio->tipo_stanza = $request->tipo_stanza;
            $annuncio->numerototalicamere = -1;
            $annuncio->lavastov = -1;
            $annuncio->lavatrice = -1;
            $annuncio->cucina = -1;
            $annuncio->localericrativo = -1;
            $annuncio->parcheggio = -1;
        }
        if($annuncio->tipologia == 0) { // appartamento
            $annuncio->numeroletticamera = -1;
            $annuncio->angolostudio = -1;
            $annuncio->tipo_stanza = -1;
            $annuncio->lavastov = $request->lavastov;
            $annuncio->lavatrice = $request->lavatrice;
            $annuncio->cucina = $request->cucina;
            $annuncio->localericrativo = $request->localericreativo;
            $annuncio->parcheggio = $request->parcheggio;
        }
        
        $annuncio->save();
        
        if ($request->hasFile('image')) {
            $oldfilename = $this->_locatoreModel->getFotoByIdAnnuncio($annuncioId)->first()->descrizione;
            if ($oldfilename != "default") {
                File::delete(public_path().'/images/annunci/'.$oldfilename);
            }
            $image = $request->file('image');
            $extension = $request->file('image')->getClientOriginalExtension();
            $imageName = auth()->user()->id.Str::random(10).'.'.$extension;
            $destinationPath = public_path() . '/images/annunci';
            $image->move($destinationPath, $imageName);
            $this->_locatoreModel->deleteFotoByIdAnnuncio($annuncioId);
            $this->salvaFoto($request, $imageName);
        }

        return redirect()->route('annuncio', ['annuncio' => $annuncioId]);
    }

    public function inserimentoOperazione($request) {
        $operazione = new Operazione();
        $operazione->idannuncio = $this->_locatoreModel->getIdAnnuncio($request->nomeannuncio);
        $operazione->descrizione = 'inserimento';
        $data = Carbon::parse(now());
        $mydatetime = $data->format('Y-m-d 00:00:00');
        $operazione->data = $mydatetime;
        $operazione->idutente = auth()->user()->id;
        $operazione->save();
    }

    public function salvaFoto($request, $imageName) {
        $foto = new Foto();
        if(!is_null($imageName)) { 
            $foto->descrizione = $imageName;
        } else {
            $foto->descrizione = "default";
        }
        $foto->idannuncio = $this->_locatoreModel->getIdAnnuncio($request->nomeannuncio);

        $foto->save();
    }
    
    public function eliminaAnnuncio($idAnnuncio) {
        $filename = $this->_locatoreModel->getFotoByIdAnnuncio($idAnnuncio)->first()->descrizione;
        if($filename != "default") {
            File::delete(public_path().'/images/annunci/'.$filename);
        }
        $this->_locatoreModel->deleteFotoByIdAnnuncio($idAnnuncio); 
        $this->_locatoreModel->deleteOperazioniByIdAnnuncio($idAnnuncio);   
        $this->_locatoreModel->deleteAnnuncioById($idAnnuncio);           
        return redirect()->action('LocatoreController@index');       
    }
    
    public function assegnaAnnuncio($idAnnuncio) {
        $annuncio = $this->_locatoreModel->getAnnuncioById($idAnnuncio)->first();
        if($annuncio->disponibilita == 1) {
            $annuncio->disponibilita = 0;
        } else if($annuncio->disponibilita == 0) {
            $annuncio->disponibilita = 1;
        }
        $annuncio->save();
        return redirect()->route('annuncio', ['annuncio' => $idAnnuncio]);    
    }

}
