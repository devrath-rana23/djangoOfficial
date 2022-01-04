<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseValidator extends FormRequest
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
            'title' => 'required|string|max:50',
            'author' => 'required|string|max:50',
            'duration' => 'required|string|max:50',
            'image_url' => 'required|string',
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Title is required!',
            'Author.required' => 'Author is required!',
            'duration.required' => 'Duration is required!',
            'image_url.required' => 'Image Url is required!',
        ];
    }
}
