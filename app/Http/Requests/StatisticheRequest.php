<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StatisticheRequest extends FormRequest {

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
            'from' => 'nullable|date|date_format:Y-m-d',
            'to' => 'nullable|date|after:from|date_format:Y-m-d'
            ];
    }
    
}
