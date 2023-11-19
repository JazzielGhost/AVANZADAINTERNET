<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $carId = Car::inRandomOrder()
            ->first()
            ->id ?? null;

        return [
            "id" => $carId,
            "name" => $this->faker->name,
            "description" => $this->faker->text(),
            "year" => $this->faker->numberBetween(2000, 2021),
        ];
    }
}
