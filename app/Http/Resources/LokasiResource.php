<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LokasiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // memilih data yang mau ditampilkan
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description
        ];

        // menampilkan semuanya
        // parent::toArray($request);
    }
}
