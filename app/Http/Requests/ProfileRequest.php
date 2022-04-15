<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Laravel\Fortify\Rules\Password;
use App\Rules\CurrentPasswordValidator;
use Illuminate\Http\Request;

class ProfileRequest extends FormRequest
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
      
        $id = $this->route('user');
        //defining rules
        $rules = [
            'first_name'                =>      ['required', 'string', 'max:191'],
            'last_name'                 =>      ['required', 'string', 'max:191'],
            'old_password'          => [ 'required' ,'string', new CurrentPasswordValidator()],
            'password'                  => ['required', 'string', new password, 'confirmed']
        ];

        return $rules;
    }
}
