<?php

namespace Modules\Website\GeneralModule\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Website\GeneralModule\Entities\Media;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Website\GeneralModule\Database\Factories\BrandFactory;

class Brand extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    protected static function newFactory()
    {
        return BrandFactory::new();
    }

    public function media()
    {
        return $this->belongsTo(Media::class);
    }

}
