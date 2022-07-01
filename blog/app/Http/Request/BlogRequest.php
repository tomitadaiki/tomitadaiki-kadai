<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
         * Determine if the user is authorized to make this request.
         * 
         * @return array
         */
        public function rules()
        {
           return[
            'title' => 'required | max:100',
            'content' =>'required'
           ];

        }
}


