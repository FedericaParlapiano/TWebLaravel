<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

// Aggiunti per response JSON
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Symfony\Component\HttpFoundation\Response;

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
            'inizioAffitto' => 'required|date|after:today|regex:/^[0-9]{4}[-][0-9]{2}[-][0-9]{2}$/',
            'fineAffitto' => 'required|date|after:inizioAffitto|regex:/^[0-9]{4}[-][0-9]{2}[-][0-9]{2}$/',
        ];
    }
    
    /**
     * Override: response in formato JSON
    */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY));
    }
    
    
}
