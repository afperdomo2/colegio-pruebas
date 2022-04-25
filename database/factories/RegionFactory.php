<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Country;

class RegionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $countries = Country::pluck('id')->toArray();
        return [
            'name' => $this->faker->name(5),
            'created_at' => now(),
            'country_id' => $this->faker->randomElement($countries),
            'updated_at' => null,
        ];
    }
}
