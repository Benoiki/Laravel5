<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostRequest extends Request
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
            'titre' => 'required|max:80',
            'contenu' => 'required',
            'tags' => ['Regex:/^[A-Za-z0-9-����]{1,50}?(,[A-Za-z0-9-����]{1,50})*$/']
        ];
    }
}
