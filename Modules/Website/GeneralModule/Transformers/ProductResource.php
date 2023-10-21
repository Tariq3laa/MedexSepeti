<?php

namespace Modules\Website\GeneralModule\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Website\GeneralModule\Transformers\MediaResource;
use Modules\Website\GeneralModule\Transformers\CategoryResource;

class ProductResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'                => $this->id,
            'title'             => $this->title,
            'price'             => $this->price,
            'views'             => $this->views,
            'description'       => $this->description,
            'media'             => new MediaResource(optional($this->media)),
            'categories'        => CategoryResource::collection($this->categories)
        ];
    }
}
