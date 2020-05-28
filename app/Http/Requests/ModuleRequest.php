<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModuleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //


            'nom' => ['required', 'string', 'max:255'], 
            'promo' => ['required', 'string', 'max:255'], 
            'smestre' => ['required', 'string', 'max:255'],
            'specialite' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:255'], 
            'code' => ['required', 'string', 'max:255'], 
            'description' => ['required', 'string', 'max:255'], 

       
        ];
    }
}
