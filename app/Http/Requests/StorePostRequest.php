<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
        $profileId = $this->route()->parameter('profil');
       

        return [
            
            'name' => 'required',
            'email' => [
                'required',
                'email',
                Rule::unique('profiles')->ignore($profileId),
            ],
            'bio' => 'min:40',
            'titre' => 'required',
            'category_id' => 'required',
             
        ];
    }
}
