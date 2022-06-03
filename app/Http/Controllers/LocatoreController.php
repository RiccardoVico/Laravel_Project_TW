<?php

namespace App\Http\Controllers;
use App\Operazione;
use App\Annuncio;
use App\Foto;
use App\Models\Catalog;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\AnnRequest;
use Carbon\Carbon;
use Imagick;
class LocatoreController extends Controller
{
    function index(){
        return view('/register');
    }
    protected $_catalogModel;

    public function __construct() {
        $this->_catalogModel = new Catalog();
    }
    

    public function inserisciannuncio(AnnRequest $request) { 
      $utente = new Annuncio();
               if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageor = $image->getClientOriginalName();
            $extension=$image->getClientOriginalExtension();
            $imageName=$imageor.request('nomeannuncio').'.'.$extension;
        } else {
            $imageName = NULL;
        }
        // $utente->image = $imageName;
         $utente->fill($request->validated());
       if (!is_null($imageName)) {
            $image->StoreAs('\images\annunci', $imageName);
            

        };

        
        $utente->nomeannuncio = request('nomeannuncio');
        $utente->canoneaffitto = request('canoneaffitto');
        $utente->cap = request('cap');
        $utente->numerocivico = request('numerocivico');
        $utente->citta = request('citta');
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
        $utente->lavastov = request('lavastov');
        $utente->lavatrice=request('lavatrice');
        $utente->tipo_stanza=request('tipostanza');
        $utente->numeroletticamera=request('numeroletticamera');
        $utente->numerototalicamere=request('numerototalicamere');
        $utente->cucina=request('cucina');
        $utente->localericrativo=request('localericrativo');
        $utente->balcone=request('balcone');
        $utente->parcheggio=request('parcheggio');
        $utente->fill($request->validated());
        $utente->save();
       
         return redirect('storagein/'.$nome.'/'. $imageName);

        
    }
    public function inserimentoperazione(){
       $utente2=new Operazione();
       $imagename=request('imagename');
       $id=$this->_catalogModel->getidannuncio(request('nome'));
       $utente2->descrizione='inserimento';
       $prova=Carbon::parse(now());
       $mydatetime=$prova->format('Y-m-d 00:00:00');
       $utente2->data=$mydatetime;
       $utente2->idutente=auth()->user()->id;
       $utente2->idannuncio=$id;
       $utente2->save();
       return redirect('salvafoto/'.$id.'/'.$imagename);
    }
     public function salvafoto(){
       $foto=new Foto();
       $foto->descrizione=request('imagename');
       request('id');
       $foto->idannuncio=request('id');
      
       $foto->save();
  
       return redirect('okay/');
    }
    

}
