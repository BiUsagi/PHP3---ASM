<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'comment_message' => 'required|string|max:1000',
        ];
    }

    public function messages()
    {
        return [
            'comment_message.required' => 'Nội dung bình luận là bắt buộc.',
            'comment_message.string' => 'Nội dung bình luận phải là một chuỗi văn bản.',
            'comment_message.max' => 'Nội dung bình luận không được vượt quá 1000 ký tự.',
        ];
    }
}