<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class login extends FormRequest
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
            //
             'username'=>'bail|required|max:5|min:3',
             'password'=>'required'
        ];
    }
      public function messages(){

        return [

            // 'username.required'=> ":attribute can't left empty",
            // 'username.unique'=> ":attribute should be unique",
            // 'username.max'=> ":attribute should be 5 character max",
            // 'password.required'=> "password can't left empty"


        ];

    }
}
