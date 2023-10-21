<?php

namespace Modules\Website\GeneralModule\Database\Factories;

use Modules\Website\GeneralModule\Entities\User;
use Modules\Website\GeneralModule\Entities\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [ 
            'buyer_id' => User::all()->random()->id,
            'total' => $this->faker->numberBetween($min = 10, $max = 1000),
        ];
    }
}
