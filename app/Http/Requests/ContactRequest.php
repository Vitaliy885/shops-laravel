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
            'name' => 'required|min:5|max:20',
            'surname' => 'required|min:3|max:20',
            'text' => 'required|min:10|max:255'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Обязательно должно быть заполнено',
            'name.min' => 'Сообщение должно быть от 5-х символов',
            'name.max' => 'Сообщение должно быть не более 20 символов',
            'surname.required' => 'Обязательно должно быть заполнено',
            'surname.min' => 'Сообщение должно быть от 3-х символов',
            'surname.max' => 'Сообщение должно быть не более 20 символов',
            'text.required' => 'Обязательно должно быть заполнено',
            'text.min' => 'Сообщение должно быть от 10-х символов',
            'text.max' => 'Сообщение должно быть не более 255-x символов',
        ];
    }
}
