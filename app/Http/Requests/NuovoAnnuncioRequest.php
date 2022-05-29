<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class NuovoAnnuncioRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {        
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'titolo' => 'required|max:25',
            'superficie' => 'nullable|numeric|min:0',
            'tipologia' => 'required|string',
            'numCamere'=> 'nullable|numeric|min:0',
            'postiLettoTotali' => 'nullable|numeric|min:0',
            'postiNellaStanza' => 'nullable|numeric|min:0',
            'inizioPeriodoDisponibilita' => 'required|date|',
            'finePeriodoDisponibilita' => 'required|date|after:inizioPeriodoDisponibilita',
            'canoneAffitto' => 'required|numeric|min:0',
            'descrizione' => 'required|max:3000',
            'zonaLocazione' => 'required|max:25',
            'indirizzo' => 'required|max:50',
            'counting-bagno' => 'nullable|numeric|min:0',
            'counting-cucina' => 'nullable|numeric|min:0',
            'counting-localericreativo' => 'nullable|numeric|min:0',
            'counting-studio' => 'nullable|numeric|min:0',
            'counting-giardino' => 'nullable|numeric|min:0',
            'counting-garage' => 'nullable|numeric|min:0',
            'counting-parcheggio' => 'nullable|numeric|min:0',
            'counting-lavanderia' => 'nullable|numeric|min:0',
            'counting-lavastoviglie' => 'nullable|numeric|min:0',
            'counting-frigo' => 'nullable|numeric|min:0',
            'counting-forno' => 'nullable|numeric|min:0',
            'counting-aria' => 'nullable|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'sesso' => 'nullable|string|max:6'
        ];
    }
}
