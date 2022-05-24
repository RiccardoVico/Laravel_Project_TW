<?php

namespace App\Http\Controllers;

use App\FAQ;
use App\Annuncio;

class AdminController extends Controller
{
    function index(){
        $prova=request('idfaq');
        echo( $prova);
      //  return view('/admin');
    }

    public function store() { 

        $faq = new faq();
        
        $faq->idfaq = request('idfaq');
        $faq->domanda = request('domanda');
        $faq->risposta = request('risposta');
        $faq->categoria = request('categoria');
        

        $faq->save();

        return redirect('/admin');                         
    }
public function totaleannunci(){
$count = Annuncio::count();
echo('totale annunci presenti nel sito');
echo($count);
}
}
