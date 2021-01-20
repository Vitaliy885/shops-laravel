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
            'name' => 'required',
            'surname' => 'required',
            'text' => 'required|min:10|max:500',
            'email' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Обязательно должно быть заполнено',
            'surname.required' => 'Обязательно должно быть заполнено',
            'text.required' => 'Обязательно должно быть заполнено',
            'text.min' => 'Сообщение должно быть от 10-х символов',
            'text.max' => 'Сообщение должно быть не более 255-x символов',
            'email.required' => 'Обязательно должно быть заполнено',
        ];
    }
}
