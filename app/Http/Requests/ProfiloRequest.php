<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfiloRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return[
            "username" => [
                'required',
                'string',
                'min:4',
                Rule::unique('users')->ignore($this->user()->id, 'id')
            ],
            "nome" => 'required|string|max:20',
            "cognome" => 'required|string|max:20',
            "mail" => 'required|string|email|max:500',
            "recapito" => 'required|string|max:20',
            "eta" => 'required|integer',
            "via" => 'required|string|max:20',
            "citta" => 'required|string|max:20',
            "numerocivico" => 'required|integer',
            "cap" => 'required|integer',
            "provincia" => 'required|max:20',
            "paese" => 'required|string|max:20',
        ];
    }

}
