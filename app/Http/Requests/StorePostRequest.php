<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
       
        return [
            
                'name' => 'required|unique:profiles',    //  |max:20|min:3|between: 3,10  |boolean (true or false* 0 or1)|date|email|url|unique:(defines which tables it's necessary)   
                'email' => 'required|email|unique:profiles',   
                'password' => 'regex:/^(?=.*[A-Za-z])(?=.*\d).{8,}$/|required|confirmed',
                'bio' => 'min:40'
    
            
        ];
    }
}
