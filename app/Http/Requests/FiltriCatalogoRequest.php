<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FiltriCatalogoRequest extends FormRequest {

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
            'superficieT' => 'nullable|numeric|digits_between:1,4',
            'superficieA' => 'nullable|numeric|digits_between:1,4',
            'superficieP' => 'nullable|numeric|digits_between:1,4',
            'postiLettoTotaliT' => 'nullable|numeric|digits_between:1,2',
            'postiLettoTotaliA' => 'nullable|numeric|digits_between:1,2',
            'postiLettoTotaliP' => 'nullable|numeric|digits_between:1,2',
            'numCamereT' => 'nullable|numeric|digits_between:1,2',
            'postiNellaStanzaT' => 'nullable|numeric|digits_between:1,2',
            'numCamere' => 'nullable|numeric|digits_between:1,2',
            'postiNellaStanza' => 'nullable|numeric|digits_between:1,2',
            'amount' => 'nullable|string',
            'tipologia'=> 'nullable',
            'citta'=>'nullable|string|max:25',
            'da' => 'nullable|date',
            'a' => 'nullable|date|after:da',
            
        ];
    }

}
