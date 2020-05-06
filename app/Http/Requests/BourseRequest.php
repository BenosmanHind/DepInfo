<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BourseRequest extends FormRequest
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
            'lieu' => ['required', 'string', 'max:255'],
            'spécialité' => ['required', 'string', 'max:255'],
            'année_universitaire' => ['required', 'string', 'max:255'],
        ];
    }
}
