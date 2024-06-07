<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
    public function rules():array
    {
        return [
            'name'=>['required','string','min:4'],
            'postnom'=>['required','string','min:4'],
            'adresse'=>['required','string','min:4'],
            'telephone'=>['required','string','min:10','max:13'],
            'email'=>['required','string', 'min:12'],
            'password'=>['required','string','min:8'],
        ];
    }
}
