<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Studio;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ucitelj>
 */
class UciteljFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ime'=>$this->faker->firstName(),
        'prezime'=>$this->faker->lastName(),
        'primanja'=>$this->faker->numberBetween($min = 50000, $max = 300000),
        'radno_iskustvo'=>$this->faker->numberBetween($min = 1, $max = 8),
        'studio_id'=> Studio::factory()
        ];
    }
}
