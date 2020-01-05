<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class verify extends FormRequest
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
          
            'assignmentname'=>'required|min:3|max:7',
            'coursename'=>'required',
            'updatedate'=>'required',
            'submissiondate'=>'required',
            'assignmentfile'=>'required'



        ];
    }
}
