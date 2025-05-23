<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaiKhoanRequest extends FormRequest
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
            'role' => 'required|in:0,1',
        ];
    }
    public function messages()
    {
        return [
            'role.required' => 'Vui lòng chọn chức vụ.',
            'role.in' => 'Chức vụ không hợp lệ.',
        ];
    }
}