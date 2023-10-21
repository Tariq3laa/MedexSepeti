<?php

namespace Modules\Website\GeneralModule\Database\Factories;

use Modules\Website\GeneralModule\Entities\Order;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Website\GeneralModule\Entities\Product;
use Modules\Website\GeneralModule\Entities\OrderItem;

class OrderItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [ 
            'order_id' => Order::all()->random()->id,
            'quantity' => $this->faker->randomNumber(2),
            'product_id' => Product::all()->random()->id,
            'price' => $this->faker->numberBetween($min = 10, $max = 1000),
        ];
    }
}
