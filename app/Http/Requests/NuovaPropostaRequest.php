<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class NuovaPropostaRequest extends FormRequest {

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
            'messaggio' => 'nullable|string',
            'canoneProposto' => 'nullable|numeric|regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/',
            'inizioAffitto' => 'required|date|',
            'fineAffitto' => 'required|date|after:inizioAffitto',
        ];
    }
    
}