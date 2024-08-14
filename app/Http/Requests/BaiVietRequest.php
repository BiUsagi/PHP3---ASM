<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BaiVietRequest extends FormRequest
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
            'tieude' => 'required|string|max:255',
            'mota' => 'required|string',
            'noidung' => 'required|string',
            'hinhanh' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'loai' => 'required|exists:theloai,id',
        ];
    }
    public function messages()
    {
        return [
            'tieude.required' => 'Tiêu đề là bắt buộc.',
            'tieude.string' => 'Tiêu đề phải là chuỗi ký tự.',
            'tieude.max' => 'Tiêu đề không được vượt quá 255 ký tự.',

            'mota.required' => 'Mô tả là bắt buộc.',
            'mota.string' => 'Mô tả phải là chuỗi ký tự.',

            'noidung.required' => 'Nội dung là bắt buộc.',
            'noidung.string' => 'Nội dung phải là chuỗi ký tự.',

            'hinhanh.required' => 'Ảnh bìa là bắt buộc.',
            'hinhanh.image' => 'Ảnh bìa phải là file ảnh.',
            'hinhanh.mimes' => 'Ảnh bìa phải có định dạng: jpeg, png, jpg, gif.',
            'hinhanh.max' => 'Ảnh bìa không được vượt quá 2MB.',

            'loai.required' => 'Vui lòng chọn thể loại.',
            'loai.exists' => 'Thể loại không tồn tại.',
        ];
    }
}