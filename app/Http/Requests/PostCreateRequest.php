<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostCreateRequest extends FormRequest
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
            // 'title' => 'required|min:4',
            // 'body' => 'required|min:4',
            // 'photo_id' => 'required',
            // 'category_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'photo_id.required' => 'Kindly select a photo',
            'category_id.required' => 'Make sure you select a category'
            ];
    }
}
