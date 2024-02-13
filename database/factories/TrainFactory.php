<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company'=>fake()->unique()->sentence(1),
            'departure_station'=>fake()->unique()->sentence(1),
            'arrival_station'=>fake()->unique()->sentence(1),
            'arrival_time'=>fake()->time(),
            'train_code'=>fake()->unique()->sentence(1),
            'number_carriages'=>fake()->randomNumber(2),
            'on_time'=>fake()->boolean(),
            'cancelled'=>fake()->boolean(),
        ];
    }
}
