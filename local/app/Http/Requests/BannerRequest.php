<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class BannerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'      => 'required|unique:posts|max:255',
            'position'  => 'required',
            'type'      => 'required',
            'is_active' => 'required',
            'filename'  => 'required',
            'content'   => 'required',
            'link'      => 'required',
        ];
    }

    /**
     * {@inheritdoc}
     */
    protected function formatErrors(Validator $validator)
    {
        return $validator->errors()->all();
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'A title is required',
            'position.required'  => 'A message is required',
            'type.required'  => 'A message is required',
            'is_active.required'  => 'A message is required',
            'filename.required'  => 'A message is required',
            'content.required'  => 'A message is required',
            'link.required'  => 'A message is required',
        ];
    }
}
