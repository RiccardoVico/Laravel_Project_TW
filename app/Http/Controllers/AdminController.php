<?php

namespace App\Http\Controllers;

use App\FAQ;
use App\Models\Resources\Annunci0;
use App\Models\Cat2;
use App\Models\Resources\Product;
use App\Http\Requests\NewProductRequest;
use App\Http\Requests\newFFaq;
use Illuminate\Support\Collection;

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
         return redirect('okayfaq/');                
    }
    
public function totaleannunci(){
    $tipoa=request('tipoa');
    $tipop=request('tipop');
    $mydatetime=request('mydatetime');
    $mydatetime2=request('mydatetime2');
    $tipo;
    $res4=new Collection;
    $res2=$this->_adminModel->getAnnunci();
    $res3=$this->_adminModel->getAnnunci();
    if((isset($tipoa)||isset($tipop))){
        if((isset($tipoa)&& isset($tipop))||(!isset($tipoa)&& !isset($tipop))){
           
           $res2=$res2;
            //$res3=$this->_adminModel->getAnnunciFiltroTipoLocati($tipoa,$res3);
            $res3=($this->_adminModel->getAnnunciFiltroLocati($res3));
        }
       
       else{
           if(isset($tipoa)){
                $res2=$this->_adminModel->getAnnunciFiltroTipoA($tipoa,$res2);
                $res3=$this->_adminModel->getAnnunciFiltroTipoLocati($tipoa,$res3);
                $tipo=$tipoa;
                ($r=($this->_adminModel->getAnnunciOpzionati()));
            
           }
           if(isset($tipop)){
               $res2=$this->_adminModel->getAnnunciFiltroTipoP($tipop,$res2);
                $res3=($this->_adminModel->getAnnunciFiltroTipoLocati($tipop,$res3));
               $tipo=$tipop;
               ($r=($this->_adminModel->getAnnunciOpzionati()));
             
           }
        }
        ($r=($this->_adminModel->getAnnunciOpzionati()));
                foreach($r as $op1){
                foreach($res2 as $an1){
                if($op1->idannuncio==$an1->idannuncio){
    $res4->add($op1);}}}}
    
     

   
    //$res5=$this->_adminModel->getAnnunciFiltroTipo($tipo,$res2);
   
   if(isset($mydatetime)){
       if((isset($tipoa)&& isset($tipop))||(!isset($tipoa)&& !isset($tipop))){
       $res4=$this->_adminModel->getAnnunciOpzionati();
       }
       else{
    $res2=$this->_adminModel->getAnnunci();
   $res3=$this->_adminModel->getFiltroDataInLocati($mydatetime,$res3);
   $res4=$this->_adminModel->getFiltroDataInOpzionati($mydatetime,$res4);}}
    if(isset($mydatetime2)){
        if(!isset($tipoa)&&!isset($mydatetime) &&!isset($tipop)){
     $res4=$this->_adminModel->getAnnunciOpzionati();}
     else{
    $res2=$this->_adminModel->getFiltroDataOut($mydatetime2,$res2);
    $res3=$this->_adminModel->getFiltroDataOutLocati($mydatetime2, $res3);
    $res4=$this->_adminModel->getFiltroDataOutOpzionati($mydatetime2,$res4);
    }}
    $count=$res2->count();
    $count3=$res3->count();
    $count4=$res4->count();
    
    return view('statistiche')
    ->with('count',$count)
   ->with('count3',$count3)
    ->with('count4',$count4);
}
 public function showHomeLocatario() {
        $annunci = $this->_catalogModel->getannunci();
        return view('locatario_home')
                        ->with('annunci', $annunci);
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
    
}
