<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class SocialAssistanceUpdateRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'thumbnail' => 'nullable|image|mimes:png,jpg|max:2048',
            'name' => 'required|string|max:255',
            'category' => 'required|in:staple,cash,subsidized fuel,health',
            'amount' => 'required|integer',
            'provider' => 'required|string',
            'description' => 'required|string',
            'is_available' => 'required|boolean'


        ];
    }

    public function attributes()
    {
        return [
            'thumbnail' => 'thumbnail',
            'name' => 'Nama',
            'category' => 'Kategori',
            'amount' => 'Jumlah Bantuan',
            'provider' => 'Penyedia',
            'description' => 'Deskripsi',
            'is_available' => 'Ketersediaan'
        ];
    }
}
