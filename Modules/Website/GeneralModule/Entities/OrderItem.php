<?php

namespace Modules\Website\GeneralModule\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Website\GeneralModule\Database\Factories\OrderItemFactory;

class OrderItem extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    protected static function newFactory()
    {
        return OrderItemFactory::new();
    }
}
