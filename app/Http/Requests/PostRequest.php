<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'title' => 'bail|required|between:2,50',
            'author' => 'bail|required|between:2,50',
            'content' => 'bail|required|between:50,2000',
        ];

        if ($this->isMethod('post')) {
            $rules['image_path'] = 'required|image|mimes:png,jpg,jpeg|max:5120';
        }
    
        if ($this->isMethod('put')) {
            $rules['image_path'] = 'nullable|image|mimes:png,jpg,jpeg|max:5120';
        }

        return $rules;
    }
}
