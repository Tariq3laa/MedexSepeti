<?php

namespace Modules\Website\GeneralModule\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Website\GeneralModule\Entities\Media;
use Modules\Website\GeneralModule\Entities\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Website\GeneralModule\Database\Factories\ProductFactory;

class Product extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    protected static function newFactory()
    {
        return ProductFactory::new();
    }

    public function media()
    {
        return $this->belongsTo(Media::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_categories', 'product_id', 'category_id')->distinct();
    }

    public function scopePromoted($query)
    {
        return $query->where('promoted', 1);
    }

    public function scopeMostViewed($query)
    {
        return $query->orderByDesc('views')->distinct()->take(15);
    }

    public function scopeBestSelling($query)
    {
        return $query->join('order_items', 'order_items.product_id', '=', 'products.id')
        ->selectRaw('products.*, SUM(order_items.quantity) AS quantity_sold')
        ->groupBy(['products.id'])
        ->orderBy('quantity_sold')
        ->take(9);
    }

    public function scopeJustArrived($query)
    {
        return $query->orderByDesc('created_at')->take(15);
    }

    public function getTagAttribute()
    {
        if(in_array($this->id, $this->mostViewed()->pluck('id')->toArray())) return 'Most Viewed';
        else if(in_array($this->id, $this->bestSelling()->pluck('id')->toArray())) return 'Best Selling';
        return 'Normal';
    }
}
