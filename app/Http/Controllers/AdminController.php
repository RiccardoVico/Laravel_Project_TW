<?php

namespace App\Http\Controllers;

use App\FAQ;
use App\Models\Resources\Annuncio;
use App\Models\Cat2;
use App\Models\Resources\Product;
use App\Http\Requests\NewProductRequest;

class AdminController extends Controller {

    protected $_adminModel;

    public function __construct() {
        $this->middleware('can:isAdmin');
        $this->_adminModel = new Cat2;
    
    }

    public function index() {
        return view('admin');
    }


    function index1(){
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
