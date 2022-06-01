<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class newFFaq extends FormRequest{
    public function authorize(){
        return true;
        
    }
    public function rules(){
        return[
        'domanda'=>'max:3',
        'risposta'=>'max:3',
        'categoria'=>'max:3'
          ];
    }
}