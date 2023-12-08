<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\driver>
 */
class DriverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // $faker = faker::create();
        // return [
        //     'name' => $faker -> unique() -> firstName(),
        //     'phone' => $faker -> buildingNumber(),
        //     'status' => Arr::random(['available', 'booked'])
        // ];
    }
}
