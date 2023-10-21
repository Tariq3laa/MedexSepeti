<?php

namespace Modules\Website\GeneralModule\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Website\GeneralModule\Database\Factories\WishlistFactory;

class Wishlist extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    protected static function newFactory()
    {
        return WishlistFactory::new();
    }
}
