<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
namespace App\Http\Controllers;
use  App\Http\Controllers\Controller;
use App\Models\Catalog;
class PublicController extends Controller{
    protected $_catalogModel;

public function __construct(){
    $this->_catalogModel=new Catalog();
}
public function show(){
    $res=$this->_catalogModel->getutente();
    return view('catalogo')
            ->with('products',$res);
}
public function showfaq(){
    $res=$this->_catalogModel->getfaq();
    return view('faq')
    ->with('products',$res);
}
}