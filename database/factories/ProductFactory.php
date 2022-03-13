<?php

namespace Database\Factories;

use App\Models\User;
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
    public function definition()
    {
        return [
            'article'   =>  $this->faker->unique->regexify('[A-Za-z0-9]{20}'),
            'name'      =>  $this->faker->company(),
            'status'    =>  $this->faker->randomElement(["available", "unavailable"]),
            'data'      =>  [
                                [
                                    'key'  => 'color',
                                    'value' => $this->faker->colorName()
                                ],
                                [
                                    'key'  => 'size',
                                    'value' => $this->faker->randomElement(["small", "medium", "large"])
                                ]
                            ],
            'user_id'   =>  User::select('id')->inRandomOrder()->first()
        ];
    }
}
