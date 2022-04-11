<?php

namespace App\Http\Requests;

use App\Models\Homestay;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class HomestayRequest extends FormRequest
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
    public function rules(Request $request)
    {
        $homestay_name = $this->route('homestay');
        $homestay = Homestay::with('homestayImages')->where('homestay_name', $homestay_name)->first();

        $image_rule = Rule::requiredIf(function () use($homestay){
            if($homestay->homestayImages->count() > 0){
                return false;
            }else{
                return true;
            }
        });

        return [
            'homestay_name'                 =>              ['required', 'string', 'max:191', 'unique:homestays,homestay_name,'.$homestay->id],
            'telephone'                     =>              ['required', 'numeric', 'digits:10'],
            'slogan'                        =>              ['nullable','string', 'max:191'],
            'services'                      =>              ['required', 'string'],
            'nearby_places'                 =>              ['nullable','string'],
            'iframe'                        =>              ['nullable','string'],
            'homestay_image'                =>              [$image_rule],
            'homestay_image.*'              =>              [ 'image', 'mimes:jpg,png,jepg', 'max:10240'],
            'description'                   =>              ['required', 'string']
        ];
    }
}
