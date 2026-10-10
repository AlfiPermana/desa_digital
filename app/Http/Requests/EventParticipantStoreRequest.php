<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class EventParticipantStoreRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'event_id' => 'required|exists:events,id',
            'head_of_family_id' => 'required|exists:head_of_families,id',
            'quantity' => 'required|integer',
        ];
    }

    public function attributes(): array
    {
        return [
            'event_id' => 'Event',
            'head_of_family_id' => 'Kepala Keluarga',
            'quantity' => 'Jumlah',
        ];
    }

    // public function messages(): array
    // {
    //     return [
    //         'event_id.required' => ':attribute Wajib Diisi.',
    //         'event_id.exists' => ':attribute Tidak Terdaftar.',
    //         'head_of_family_id.required' => ':attribute Wajib Diisi.',
    //         'head_of_family_id.exists' => ':attribute Tidak Terdaftar.',
    //         'quantity.required' => ':attribute Wajib Diisi.',
    //         'quantity.integer' => ':attribute Wajib Berupa Angka.',
    //         'total_price.required' => ':attribute Wajib Diisi.',
    //     ];
    // }
}
