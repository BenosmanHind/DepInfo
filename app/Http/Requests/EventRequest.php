<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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

            'title' => ['required', 'string', 'max:255'], 
            'description' => ['required', 'string'], 
            'lieu' => ['required', 'string', 'max:255'], 
            'date' => ['required', 'string', 'max:255'], 
            'heure' => ['required', 'string', 'max:255'],

        ];
    }
}
