<?php

namespace App\Http\Controllers;

use App\FAQ;
use App\Models\Resources\Annunci0;
use App\Models\cat3;
use App\Models\Resources\Product;
use App\Http\Requests\NewProductRequest;
use App\Http\Requests\newFFaq;
use Illuminate\Support\Collection;

class adminController2 extends Controller {

    protected $_adminModel2;

    public function __construct() {
        $this->middleware('can:isAdmin');
        $this->_adminModel2 = new cat3;
    
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
         return redirect('okayfaq/');                
    }
        public function tot(){
    $tipo=request('tipo');
    $res2=$this->_adminModel->getAnnunci();
    $count=$res2->count();
    $resx=$this->_adminModel->getAnnunciOpzionati();
    $tre=$resx->count();
    $resy=$this->_adminModel->getAnnunciLocati();
    $res4=$resy->count();
    return view('stats')
    ->with('count',$count)
    ->with('count3',$tre)
    ->with('count4',$res4);
}
public function totaleannunci(){
      $tipoa=request('tipoa');
      $tipop=request('tipop');
      $mydatetime=request('mydatetime');
      $mydatetime2=request('mydatetime2');
      $res2=$this->_adminModel2->getAnnunci();
      $res4= new Collection;
      $res5=$this->_adminModel2->getAnnunci();
        if((isset($tipoa)&& isset($tipop))||(!isset($tipoa)&& !isset($tipop))){
            ($res2=$res2);
        }
        else{
            if(isset($tipoa)){
             ($res2=$this->_adminModel2->getAnnunciFiltroTipo($tipoa,$res2));
             ($res5=$this->_adminModel2->getAnnunciFiltroTipo($tipoa, $res2));
            }
             if(isset($tipop)){
             $res2=$this->_adminModel2->getAnnunciFiltroTipo($tipop,$res2); 
             $res5=$this->_adminModel2->getAnnunciFiltroTipo($tipop,$res2);
             }
            
        }
        $res3=$this->_adminModel2->getAnnunciLocati2($res2);
        $r=($this->_adminModel2->getAnnunciOpzionati());
               foreach($r as $op1){
               foreach($res2 as $an1){
               if($op1->idannuncio==$an1->idannuncio){
               $res4->add($op1);}}}
               
       
        if(isset($mydatetime)){
            $res2=$this->_adminModel2->getFiltroDataIn($mydatetime,$res2);
             $res3=$this->_adminModel2->getFiltroDataInLocati($mydatetime,$res3);
        ($res4=$this->_adminModel2->getFiltroDataInOpzionati($mydatetime, $res4));
            
        }
        if(isset($mydatetime2)){
            $res2=$this->_adminModel2->getFiltroDataOut($mydatetime2,$res2);
            $res3=$this->_adminModel2->getFiltroDataOutLocati($mydatetime2, $res3);
            ($res4=$this->_adminModel2->getFiltroDataOutOpzionati($mydatetime2, $res4));
            $res5=$this->_adminModel2->getFiltroDataOut($mydatetime2,$res5);
        }
       if(!isset($mydatetime)&&!isset($mydatetime)){
           return view('statistiche')
           ->with('count3',$res3->count())
           ->with('count4',$res4->count())
           ->with('count5',$res5->count());
       }
       else{
        return view('statistiche')
        ->with('count',$res2->count())
        ->with('count3',$res3->count())
        ->with('count4',$res4->count())
        ->with('count5',$res5->count());
}

}
       }