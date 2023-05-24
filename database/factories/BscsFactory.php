<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bscs>
 */
class BscsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name'=>fake()->name(),
            'fathername'=>fake()->name(),
            'password'=>fake()->password(),
            'sname'=>fake()->name(),
            'phone'=>fake()->phoneNumber()
        ];
    }
}
