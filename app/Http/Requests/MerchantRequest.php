<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MerchantRequest extends FormRequest
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
            'pan_number'            =>          ['required', 'string', 'max:191'],
            'identity_front'        =>          ['required','image', 'mimes:jpg,png,jepg', 'max:10240'],
            'identity_back'        =>           ['required','image', 'mimes:jpg,png,jepg', 'max:10240'],
        ];
    }
}
