<?php

namespace Modules\Website\GeneralModule\Transformers;

use function GuzzleHttp\Psr7\str;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'   => $this->id,
            'title' => $this->title
        ];
    }
}
