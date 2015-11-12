<?php

namespace cinema\Http\Requests;

use cinema\Http\Requests\Request;

class GenroRequest extends Request
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
            'genro'=>'required|min:3'
        ];
    }
}
