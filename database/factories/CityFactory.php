<?php

namespace Database\Factories;

use App\Domain\City\City;
use App\Domain\State\State;
use Illuminate\Database\Eloquent\Factories\Factory;

class CityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = City::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'state_id' => State::factory()->create(),
            'name' => $this->faker->city,
        ];
    }
}
