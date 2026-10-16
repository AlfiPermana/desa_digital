<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class DevelopmentApplicantStoreRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'development_id' => 'required|exists:developments,id',
            'user_id' => 'required|exists:users,id',
            'status' => 'nullable|in:pending,approved,rejected',
        ];
    }

    public function attributes(): array
    {
        return [
            'development_id' => 'Pembangunan',
            'user_id' => 'User',
            'status' => 'Status',
        ];
    }

    // public function messages(): array
    // {
    //     return [
    //         'development_id.required' => 'Pengembangan wajib diisi',
    //         'development_id.exists' => 'Pengembangan tidak ditemukan',
    //         'user_id.required' => 'User wajib diisi',
    //         'user_id.exists' => 'User tidak ditemukan',
    //         'status.in' => 'Status harus di antara pending, approved, atau rejected',
    //     ];
    // }
}
