<?php

namespace PocketByR\Http\Requests;

use PocketByR\Http\Requests\Request;

class DireccionRequest extends Request
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
            'nombres' => 'max:20|min:2|required'
        ];
    }
}
