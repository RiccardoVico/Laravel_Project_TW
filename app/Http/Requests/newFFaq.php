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
        'domanda'=>'required|max:300',
        'risposta'=>'required|max:600',
        'categoria'=>'max:300'
          ];
    }
}