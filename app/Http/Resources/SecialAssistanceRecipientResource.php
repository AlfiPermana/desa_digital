<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\SocialAssistance;
use App\Models\HeadOfFamily;

class SecialAssistanceRecipientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'social_assistance_id' => new SocialAssistance($this->socialAssistance),
            'head_of_family_id' => new HeadOfFamily($this->headOfFamily),
            'amount' => $this->amount,
            'reason' => $this->reason,
            'bank' => $this->bank,
            'account_number' => $this->account_number,
            'proof' => $this->proof,
            'status' => $this->status,
        ];
    }
}
