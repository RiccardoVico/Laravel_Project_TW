<?php

namespace App\Http\Controllers;

use App\FAQ;
use App\Models\Resources\Annuncio;

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
return view('statistiche')
->with('count',$count);
}
 public function showHomeLocatario() {
        $annunci = $this->_catalogModel->getannunci();
        return view('locatario_home')
                        ->with('annunci', $annunci);
    }
}
