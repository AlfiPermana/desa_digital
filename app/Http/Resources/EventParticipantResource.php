<?php

namespace App\Http\Resources;

use App\Http\Resources\HeadOfFamilyResource;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;

class EventParticipantResource extends JsonResource
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
            'event' => new EventResource($this->event),
            'head_of_family' => new HeadOfFamilyResource($this->headOfFamily),
            'quantity' => $this->quantity,
            'total_price' => (float)(string)$this->total_price,
            'payment_status' => $this->payment_status,
        ];
    }
}
