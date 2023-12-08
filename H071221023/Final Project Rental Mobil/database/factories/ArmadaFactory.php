<?php

namespace Database\Factories;

use Faker\Factory as faker;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\armada>
 */
class ArmadaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = faker::create();
        return [
            'name' => $faker -> unique() -> firstName(),
            'price' => $faker -> buildingNumber(),
            'transmission'=> Arr::random(['matic', 'manual']),
            'status' => Arr::random(['available', 'booked'])
        ];
    }
}
