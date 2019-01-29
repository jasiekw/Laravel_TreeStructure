<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidatedRequest extends FormRequest
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
            'name' => 'required|max:20',
        ];
    }

    public function messages()
    {
        return [
        'name.required' => 'Podaj nazwę',
        'name.max' => 'Element może zawierać maksymalnie 20 znaków',
        ];
    }
}
