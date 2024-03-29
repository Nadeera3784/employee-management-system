<?php

namespace Database\Factories;

use App\Domain\Country\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

class CountryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Country::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'country_code' => $this->faker->countryCode,
            'name' => $this->faker->country,
        ];
    }
}
