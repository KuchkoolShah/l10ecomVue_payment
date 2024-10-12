<?php

namespace Database\Factories;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $productSuffix = ['Glasses' , 'Shirt' , 'Sweater' , 'Pants' , 'Hat'];
        $name = $this->faker->company() .' '. Arr::random($productSuffix);
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->realText(200),
            'price' => $this->faker->numberBetween(1000 , 10000),
        ];
    }
}
