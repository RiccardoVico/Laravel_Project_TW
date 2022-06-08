<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class newF extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return[
            'prezzomax' => 'nullable|numeric|min:0',
            'prezzomin' => 'nullable|numeric|min:0',
            'superficie' => 'nullable|numeric|min:0',
            'postilettototali' => 'nullable|numeric|min:0',
            'letticamera' => 'nullable|numeric|min:0',
            'numerocamere' => 'nullable|numeric|min:0',
            'etamin' => 'nullable|numeric|min:0',
            'etamax' => 'nullable|numeric|min:0;'
        ];
    }

}
