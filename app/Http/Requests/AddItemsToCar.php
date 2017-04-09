<?php

namespace laravel5\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddItemsToCar extends FormRequest
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
            'amount'=>'required|regex:[^[1-9]\d*$]'
        ];
    }
}
