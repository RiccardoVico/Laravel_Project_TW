<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
namespace App\Http\Controllers;
use App\Utente;
use App\Models\Catalog;
use Illuminate\Support\Arr;
use App\Models\Resources\users;
use App\Models\Resources\Annuncio;
use Illuminate\Support\Collection;
use  App\Http\Controllers\Controller;
use App\Http\Requests\ProfiloRequest;

class PublicController extends Controller {

    protected $_catalogModel;

    public function __construct() {
        $this->_catalogModel = new Catalog();
    }
    
    public function showHome() {
        $annunci = $this->_catalogModel->getAnnunci();
        return view('public_home')
                        ->with('annunci', $annunci);
    }

    public function show() {
        $annunci = $this->_catalogModel->getAnnunci();
        return view('catalogo')
                        ->with('annunci', $annunci);
    }

    public function showfaq() {
        $res = $this->_catalogModel->getfaq();
        return view('faq')
                        ->with('products', $res);
    }

    public function showHomeLocatore() {
        $annunci = $this->_catalogModel->getannunci();
        return view('locatore_home')
                        ->with('annunci', $annunci);
    }

    public function showGestisciOfferte($userId) {
       $operazioni = $this->_catalogModel->getOperazioni()->where('idutente', $userId);
       $oo=$this->_catalogModel->getOperazioniFiltro($operazioni);
       $annunci = $this->_catalogModel->getAnnunciById($oo->pluck('idannuncio')->toArray());
       return view('gestisci_offerte')
       ->with('annunci', $annunci);
    }

    public function showHomeLocatario() {
        $annunci = $this->_catalogModel->getannunci();
        return view('locatario_home')
                        ->with('annunci', $annunci);
    }
    
    public function showHomeAdmin() {
        $annunci = $this->_catalogModel->getannunci();
        return view('admin')
                        ->with('annunci', $annunci);
    }
    
    public function showAnnuncio($annuncioId) {
        $annunci = $this->_catalogModel->getAnnunciSpaginati();
        $annuncio = $annunci->where('idannuncio', $annuncioId)->first();
        $operazioni = $this->_catalogModel->getOperazioni();
        $idutente = $operazioni->where('idannuncio', $annuncioId)->first()->idutente;
        return view('annuncio')
                ->with('annuncio', $annuncio)
                ->with('idutente', $idutente);
    }

    public function annunciopzionati($userId){
        
        $res=$this->_catalogModel->getOperazioni();
        $operazioniins1= $this->_catalogModel->getOperazioniFiltro($res);
        $operazioniins2=$operazioniins2=$this->_catalogModel->getOperazioniFiltro2($operazioniins1, $userId);
        $ann=$this->_catalogModel->getAnnunci2();
        $coll2=$this->_catalogModel->opzionati($operazioniins2, $ann);
   
         
             
         
         
        
        //(($opp=$this->_catalogModel->getOperazioniOpziona()));
        
       // ($tt=$this->_catalogModel-> getAnnunciOpzionati($coll,$opp));
        //foreach($opp as $op){
          //  echo($op->idannuncio);
          //  echo($op->idutente);
        //}
      

   
       return view('prova3')
       ->with('annunci', $coll2);
        
        
             //  return redirect('annopzionati');


    }

    public function opzionatoda($idannuncio){
        $annunci=$this->_catalogModel->showopzionatoda($idannuncio);
    
        return view('prova4')
            ->with('annunci', $annunci);
    }
    
    public function showProfilo($userId) {
        $user = $this->_catalogModel->getuserbyid($userId);
        return view('profilo')
                ->with('user', $user);
    }

    public function modificaprofilo($userId, ProfiloRequest $request) {
        //echo(current($request->validated()));
        $user = $this->_catalogModel->getuserbyid($userId);
        
        // $user->fill($request->validated());
        $user->username=$request->username;
        $user->nome=$request->nome;
        $user->cognome=$request->cognome;
        $user->mail=$request->mail;
        $user->recapito=$request->recapito;
        $user->eta=$request->eta;
        $user->genere=$request->genere;
        $user->via=$request->via;
        $user->citta=$request->citta;
        $user->numerocivico=$request->numerocivico;
        $user->cap=$request->cap;
        $user->provincia=$request->provincia;
        $user->paese=$request->paese;
        $user->cittainteresse=$request->cittainteresse;

        $user->save();

        return view('profilo')
                ->with('user', $user);
    }
      
    public function showMessaggistica() {
        return view('messaggistica');
    }
      
     
        


}

