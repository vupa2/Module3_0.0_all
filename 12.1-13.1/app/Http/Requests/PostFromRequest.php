<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class PostFromRequest extends FormRequest
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
            'title' => 'required',
            'summary' => 'required',
            'content' => 'required',
            'user_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Tiêu đề là bắt buộc',
            'summary.required' => 'Tóm tắt là bắt buộc',
            'content.required' => 'Nội dung là bắt buộc',
            'user_id.required' => 'Bắt buộc đăng nhập',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $response = [
            // "success" => false, // Here I added a new field on JSON response.
            "message" => 'Không thành công', // Here I used a custom message.
            "errors" => $validator->errors(), // And do not forget to add the common errors.
        ];

        // Finally throw the HttpResponseException.
        throw new HttpResponseException(response()->json($response, 422));
    }
}
