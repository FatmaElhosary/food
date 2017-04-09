<?php

namespace laravel5\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddItemRequest extends FormRequest
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
            'name'=>'required|min:3',
            'description'=>'required|min:3',
            'smallprice'=>'required|regex:[^[1-9]\d*$]',
            'mediumprice'=>'required|regex:[^[1-9]\d*$]',
            'largeprice'=>'required|regex:[^[1-9]\d*$]'
        ];
    }
}
