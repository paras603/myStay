<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Rules\Password;

class UserRequest extends FormRequest
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
        $id = $this->route('user');
        //defining rules
        $rules = [
            'first_name'                =>      ['required', 'string', 'max:191'],
            'last_name'                 =>      ['required', 'string', 'max:191'],
            'email'                     =>      ['required', 'string', 'email', 'max:191', Rule::unique(User::class)->ignore($id)],
            'role_id'                   =>      ['required', 'exists:roles,id'],
        ];
        //adding rules for password for post request only
        //no need to validate during update, because there will be no password field on update
        //there will be another form change password for updating password
        if ($this->isMethod('POST')) {
            $rules['password']                  = ['required', 'string', new Password, 'confirmed'];
            $rules['password_confirmation']     = ['required'];
        }
        return $rules;
    }
}
