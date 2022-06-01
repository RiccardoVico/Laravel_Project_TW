<?php

namespace App\Http\Controllers;

use App\FAQ;
use App\Models\Resources\Annunci0;
use App\Models\Cat2;
use App\Models\Resources\Product;
use App\Http\Requests\NewProductRequest;
use App\Http\Requests\newFFaq;

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

    public function store(newFFaq $request) { 

        $faq = new faq();
        
       // $faq->idfaq = request('idfaq');
        $faq->domanda = request('domanda');
        $faq->risposta = request('risposta');
        $faq->categoria=request('categoria');;
        echo('ciao');
        echo(request('categoria'));
        $faq->save();
        return redirect('/admin');                         
    }
    
public function totaleannunci(){
    $tipo=request('tipo');
    $mydatetime=request('mydatetime');
    $mydatetime2=request('mydatetime2');
    $res2=$this->_adminModel->getAnnunci();
    if(isset($tipo))
    $res2=$this->_adminModel->getAnnunciFiltroTipo($tipo,$res2);
   if(isset($mydatetime))
    $res2=$this->_adminModel->getFiltroDataIn($mydatetime,$res2);
    if(isset($mydatetime2))
    $res2=$this->_adminModel->getFiltroDataOut($mydatetime2,$res2);
    $count=count($res2);
    return view('statistiche')
    ->with('count',$count);
}
 public function showHomeLocatario() {
        $annunci = $this->_catalogModel->getannunci();
        return view('locatario_home')
                        ->with('annunci', $annunci);
    }
    public function tot(){
    $tipo=request('tipo');
    $res2=$this->_adminModel->getAnnunci();
    $count=count($res2);
    return view('stats')
    ->with('count',$count);
}
    
}
