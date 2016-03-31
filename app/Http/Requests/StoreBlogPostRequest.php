<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

    class StoreBlogPostRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        //return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3',
            'text' => 'required|min:5'
        ];
    }

    public function messages()
    {
        return [
            'title.*' => 'Введіть поле заголовку',
            'text.*' => 'Введіть текс поста'
        ];
    }
}
