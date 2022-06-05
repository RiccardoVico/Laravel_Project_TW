<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfiloRequest extends FormRequest{

    public function authorize(){
        return true;
        
    }
    public function rules(){
        return[
        "username"=>'required',
        "nome"=>'required',
        "cognome"=>'required',
        "mail"=>'required',
        "recapito"=>'required',
        "via"=>'required',
        "citta"=>'required',
        "numerocivico"=>'required',
        "cap"=>'required',
        "provincia"=>'required',
        "paese"=>'required',
        "cittainteresse"=>'required',
        ];
    }
}