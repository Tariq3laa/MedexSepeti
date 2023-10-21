<?php

namespace Modules\Website\GeneralModule\Database\Factories;

use Modules\Website\GeneralModule\Entities\Brand;
use Modules\Website\GeneralModule\Entities\Media;
use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Brand::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'media_id' => Media::count() ? Media::all()->random()->id : NULL,
            'title' => $this->faker->unique()->words(rand(1, 3), true)
        ];
    }
}
