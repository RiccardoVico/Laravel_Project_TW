<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Public_;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfiloRequest;
use App\Http\Requests\MessaggioRequest;

class PublicController extends Controller {

    protected $_catalogModel;

    public function __construct() {
        $this->_catalogModel = new Public_();
    }

    public function showHome() {
        $annunci = $this->_catalogModel->getUltimiAnnunci(3);
        $foto = $this->_catalogModel->getFoto();
        return view('public_home')
                        ->with('annunci', $annunci)
                        ->with('foto', $foto);
    }

    public function showCatalogo() {
        $annunci = $this->_catalogModel->getAnnunciPaginati(3);
        $foto = $this->_catalogModel->getFoto();
        return view('catalogo')
                        ->with('annunci', $annunci)
                        ->with('foto', $foto);
    }

    public function showFaq() {
        $res = $this->_catalogModel->getFaq();
        return view('faq')
                        ->with('products', $res);
    }

    public function showAnnuncio($annuncioId) {
        $annunci = $this->_catalogModel->getAnnunci();
        $annuncio = $annunci->where('idannuncio', $annuncioId)->first();
        $operazioni = $this->_catalogModel->getOperazioni();
        $idutente = $operazioni->where('idannuncio', $annuncioId)->first()->idutente;
        $foto = $this->_catalogModel->getFotoByIdAnnuncio($annuncioId)->first();
        $opzionato = $this->_catalogModel->getOpzionatoAnnuncio($annuncioId, Auth::id());
        return view('annuncio')
                        ->with('annuncio', $annuncio)
                        ->with('idutente', $idutente)
                        ->with('foto', $foto)
                        ->with('opzionato', $opzionato);
    }
    
    public function opzionaAnnuncio($annuncioId) {
        $opzionato = $this->_catalogModel->getOpzionatoAnnuncio($annuncioId, Auth::id());
        if(!$opzionato) {
            $this->_catalogModel->addOperazione($annuncioId, Auth::id(), "opzionamento");           
        } else {
            $this->_catalogModel->deleteOperazione($annuncioId, Auth::id(), "opzionamento");
        }
        return redirect()->action('PublicController@showAnnuncio', $annuncioId);       
    }

    public function richiedentiAnnuncio($idannuncio) {
        $annuncio = $this->_catalogModel->getAnnuncioById($idannuncio)->first();
        $operazioni = $this->_catalogModel->getOperazioni()->where('idannuncio', $idannuncio);
        $operazioni = $operazioni->where('descrizione', "opzionamento");
        $utenti = $this->_catalogModel->getUtenti()->whereIn('id', $operazioni->pluck('idutente')->toArray());  
        return view('richiedenti')
                        ->with('annuncio', $annuncio)
                        ->with('utenti', $utenti);
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
    
    public function showMessaggistica($userId, $userId2 = 0) {
        // echo($this->_catalogModel->getMessaggiByUserId($userId));
        $idutenti = $this->_catalogModel->getMessaggiByUserId($userId)->pluck('idutente1')->toArray();
        $idutenti = array_merge($idutenti, $this->_catalogModel->getMessaggiByUserId($userId)->pluck('idutente2')->toArray());
        $idutenti = collect($idutenti)->unique()->toArray();
        // echo(implode(',' , $utenti));
        if (($key = array_search($userId, $idutenti)) !== false) {
            unset($idutenti[$key]);
        }
        $utenti = $this->_catalogModel->getUtenti()->whereIn('id', $idutenti);
        // echo($utenti);
        if ($userId2 != 0) {
            $destinatario = $this->_catalogModel->getuserbyid($userId2);
            $messaggi = $this->_catalogModel->getMessaggiByTwoUsers($userId, $userId2);
            // echo($messaggi);
            $messaggi = $messaggi->sortBy(function ($obj, $key) {
                return strtotime($obj->data);
            });
            // echo($messaggi);
            return view('messaggistica')
                            ->with('utenti', $utenti)
                            ->with('messaggi', $messaggi)
                            ->with('destinatario', $destinatario);
        }

        return view('messaggistica')
                        ->with('utenti', $utenti);
    }

    public function createMessaggio($userId, $userId2, MessaggioRequest $request) {
        $this->_catalogModel->createMessaggio($userId, $userId2, $request);
        return redirect()->route('messaggistica', ['idutente' => $userId, 'idutente2' => $userId2]);
    }

}
