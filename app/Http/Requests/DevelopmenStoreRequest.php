<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class DevelopmenStoreRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'thumbnail' => 'required|image',
            'name' => 'required|string',
            'description' => 'required|string',
            'person_in_charge' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'amount' => 'required|integer',
            'status' => 'required|in:ongoing,completed',
        ];
    }

    public function attributes(): array
    {
        return [
            'thumbnail' => 'Thumbnail',
            'name' => 'Nama',
            'description' => 'Deskripsi',
            'person_in_charge' => 'Penanggung Jawab',
            'start_date' => 'Tanggal Mulai',
            'end_date' => 'Tanggal Selesai',
            'amount' => 'Jumlah Dana',
            'status' => 'Status',
        ];
    }
}
