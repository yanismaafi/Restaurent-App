<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
            "phone" => "required|numeric",
            "date" => "required|date|after_or_equal:now",
            "time" => "required|date_format:H:i",
            "nbrPerson" => "required|integer|min:1|max:50",
            "comment" =>  "min:8|max:250",
        ];
    }

    public function messages()
    {
        return [

            'name.required' => 'Veuillez remplir le nom.',
            'name.min' => 'Le nom doit comporter au moins 3 caractères.',

            'email.required' => 'Veuillez introduire une adresse mail.',
            'email.email' => 'Veuillez introduir une adresse mail valide.',

            'date.required' => 'Veuillez remplir la date.',
            'date.date' => 'Veuillez respecter le format de la date.',
            'date.after_or_equal' => 'Veuillez choisir une autre date.',


            'nbrPerson.required' => 'Veuillez nous indiquer le nombre de personne.',
            'nbrPerson.integer' => 'Le nombre de personne doit etre un chiffre entier (exemple: 2,3...).',
            'nbrPerson.min' => 'Le nombre de personne doit être supérieur à 0.',

            'time.required' => 'Veuillez remplir l\'heure.',
            'time.date_format' => 'Veuillez respecter le format de l\'heure.',

            'comment.max' => 'Essayer de ne pas depasser les 250 caractères.',
            'comment.min' => 'Votre commentaire doit contenir au moins 8 caractères.'

            

        ];
    }
}
