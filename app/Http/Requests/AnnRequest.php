<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;



class AnnRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        // Nella form non mettiamo restrizioni d'uso su base utente
        // Gestiamo l'autorizzazione ad un altro livello
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'nomeannuncio' =>'required|unique:annuncio,nomeannuncio',
            'image' => 'required|file|mimes:jpeg,png|max:1024',
            'canoneaffitto' =>'required|numeric|min:0',
            'cap' =>'required',
            'numerocivico' =>'required',
            'citta' =>'required',
            'superficie'=>'required|numeric|min:0',
            'postilettototali' =>'required|numeric|min:0',
            'etamin' =>'required|numeric|min:0',
            'etamax' =>'required|numeric|min:0',
            'descrizione' =>'required',
            'utenze' =>'required',
            'via' =>'required',
            'in_at' =>'required',
            'out_at' =>'required',
            'numeroletticamera' =>'nullable|numeric|min:0',
            'numerototalecamere' =>'nullable|numeric|min:0',
            
         
        ];
    }

    /**
     * Override: response in formato JSON
    */
   

}
