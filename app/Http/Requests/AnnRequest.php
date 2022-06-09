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
            'nomeannuncio' => 'required|max:25',
            'canoneaffitto' => 'required|integer',
            'cap' => 'required|integer',
            'numerocivico' => 'required|integer',
            'citta' => 'required',
            'superficie' => 'required|integer',
            'postiletto' => 'required',
            'wifi' => 'required',
            'angolostudio' => 'required',
            'climatizzatore' => 'required',
            'etamin' => 'required',
            'etamax' => 'required',
            'genere' => 'required',
            'lavatrice' => 'required',
            'lavastov' => 'required',
            'tipologia' => 'required',
            'descrizione' => 'required',
            'utenze' => 'required',
            'via' => 'required',
            'tipo_stanza' => 'required',
            'numeroletticamera' => 'required',
            'numerototalicamere' => 'required',
            'cucina' => 'required',
            'localericreativo' => 'required',
            'parcheggio' => 'required',
            'balcone' => 'required',
            'in_at' => 'required',
            'out_at' => 'required',         
            'image' => 'file|mimes:jpeg,png|max:1024'
        ];
    }

}
