<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'  =>'required',
            'email' =>'required|email',
        ];
    }

    public function messages()
    {   
        return [
            'name.required' =>'Bạn cần diền tên',
            'email.required'=>'Bạn cần điền email',
            'email.email'   =>'Email có dạng : abc@gmail.com',
            // 'email.unique:users'=>'Email của bạn đã được đăng ký'
        ];
        
    }
}
