<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'fullname' => $this->fullname,
            'phone' => $this->phone,
            'email' => $this->email,
            'family_member' => $this->family_member,
            'children' => $this->children,
            'message' => $this->message,
            'property' => $this->property->title,
            // 'property' => new PropertyResource($this->property),
        ];
    }
}
