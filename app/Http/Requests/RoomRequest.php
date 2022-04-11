<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomRequest extends FormRequest
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
            'room_image'                        =>              ['required',  'image', 'mimes:jpg,png,jepg', 'max:10240'],
            'description'                       =>             ['required',  'string'],
            'room_type'                         =>              ['required', 'in:normal,standard,premium'],
            'price'                             =>              ['required', 'numeric'],
        ];
    }
}
