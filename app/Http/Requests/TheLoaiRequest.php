<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TheLoaiRequest extends FormRequest
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
            'ten_the_loai' => 'required|string|max:255|unique:theloai,ten',
        ];
    }
    public function messages()
    {
        return [
            'ten_the_loai.required' => 'Tên thể loại là bắt buộc.',
            'ten_the_loai.string' => 'Tên thể loại phải là một chuỗi ký tự.',
            'ten_the_loai.max' => 'Tên thể loại không được vượt quá 255 ký tự.',
            'ten_the_loai.unique' => 'Tên thể loại đã tồn tại.',
        ];
    }
}