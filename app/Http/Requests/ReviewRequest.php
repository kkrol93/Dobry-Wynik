<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
            'title' => 'required|max:255',
            'review' => 'required',
            'email' => 'required|email|unique:reviews',
            'name' => 'required|max:255',
            'rate' => 'required|min:1|max:5'
            
        ];
    }
    public function messages()
    {
        return [
      
            'email.required' => 'Proszę podać swój adres email!',
            'title.required' => 'Proszę wpisać tytuł!',
            'title.max:255' => 'Tytuł może zawierać maksymalnie 255 znaków',
            'review.required' => 'Opinia jest wymagana',
            'name.required' => 'Proszę podać swóje imię!',
            'name.max:255' => 'Imię może zawierać maksymalnie 255 znaków',
            'email.email' => 'Proszę podać prawidłowy email!',
            'email.unique' => 'Ten adres e-mail już został użyty!',
            'rate.required' => 'Co to za opinia bez oceny! :) Proszę zaznaczyć odpowiednią ilość gwiazdek!',
            'email.required' => 'Proszę podać swój adres email!',

            ];
    }
}
