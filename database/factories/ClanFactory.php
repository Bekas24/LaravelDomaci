<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ucitelj;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clan>
 */
class ClanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'sifra'=>$this->faker->unique()->word(),
            'ime'=>$this->faker->firstName(),
            'prezime'=>$this->faker->lastName(),
            'godine'=>$this->faker->numberBetween($min = 12, $max= 72),
            'adresa'=>$this->faker->streetAddress(),
            'ucitelj_id'=>Ucitelj::factory()
        ];
    }
}
