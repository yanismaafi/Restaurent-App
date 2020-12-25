<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            "name" => "required|min:3|alpha",
            "email" => "required|email",
            "subject" => "required|min:6|max:250|string",
            "message" => "required|min:6|string"
        ];
    }


    public function messages()
    {
        return [

            'name.required' => 'Veuillez remplir le nom.',
            'name.min' => 'Le nom doit comporter au moins 3 caractères.',

            'email.required' => 'Veuillez introduire une adresse mail.',
            'email.email' => 'Veuillez introduir une adresse mail valide.',

            'subject.required' => 'Veuillez remplir le sujet.',
            'subject.max' => 'Essayer de ne pas depasser les 250 caractères.',
            'subject.min' => 'Le sujet commentaire doit comporter au moins 8 caractères.',
       
            'comment.max' => 'Essayer de ne pas depasser les 250 caractères.',
            'comment.min' => 'Votre commentaire doit contenir au moins 8 caractères.'
        ];
    }

}
