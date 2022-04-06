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
            'identity_front'                =>           ['required',  'image', 'mimes:jpg,png,jepg', 'max:10240'],
            'identity_back'                 =>           ['required',  'image', 'mimes:jpg,png,jepg', 'max:10240'],
            'pan_number'                    =>           ['required',  'string', 'max:191'],
            'merchant_image'                =>           ['required',  'image', 'mimes:jpg,png,jepg', 'max:10240'],
            'registration_certificate'      =>           ['required',  'image', 'mimes:jpg,png,jepg', 'max:10240'],
            'homestay_name'                 =>           ['required',  'string', 'max:191'],
            'homestay_address'              =>           ['required',  'string', 'max:191'],
            'telephone'                     =>           ['required', 'numeric', 'digits:10'],
        ];
    }
}
