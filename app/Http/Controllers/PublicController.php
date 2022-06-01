<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
namespace App\Http\Controllers;
use  App\Http\Controllers\Controller;
use App\Models\Catalog;
use App\Utente;

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
        $annunci = $this->_catalogModel->getAnnunciById($operazioni->pluck('idannuncio')->toArray());
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
}
