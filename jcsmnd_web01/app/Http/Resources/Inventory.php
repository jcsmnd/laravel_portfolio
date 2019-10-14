<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Inventory extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
            'id' => $this->id,
            'sku' => $this->sku,
            'qty' => $this->qty,
            'amt' => $this->amt,
            'product_name' => $this->product_name,
            'product_desc' => $this->product_desc, 
        ];
    }

    public function with($request)
    {
        return [
            'version' => '1.0.0',
            'author_url' => url('http://jcsmnd.com')
        ];
    }
}
