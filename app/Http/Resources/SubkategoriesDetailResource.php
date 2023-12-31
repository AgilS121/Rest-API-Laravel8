<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SubkategoriesDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'id_kategori' => $this->id_kategori,
            'nama_subkategori' => $this->nama_subkategori,
            'created_at' => date_format($this->created_at, "Y/m/d H:i:s"),
            'nkategori' => $this->whenLoaded('nkategori'),
        ];
    }
}
