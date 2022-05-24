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
        return view('layouts/public')
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

    public function showGestisciOfferte() {
        $annunci = $this->_catalogModel->getannunci();
        return view('locatore_gestisci_offerte')
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

}
