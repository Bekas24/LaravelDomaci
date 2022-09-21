<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Studio>
 */
class StudioFactory extends Factory
{
    
    public function definition()
    {
        return [
            'naziv_studija'=>$this->faker->company(),
        'lokacija'=>$this->faker->address(),
        'grad'=>$this->faker->city(),
         'broj_clanova'=>$this->faker->numberBetween($min = 1,$max = 20)
        ];
    }
}
