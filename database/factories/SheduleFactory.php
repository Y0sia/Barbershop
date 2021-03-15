<?php

namespace Database\Factories;

use App\Models\Shedule;
use Illuminate\Database\Eloquent\Factories\Factory;

class SheduleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Shedule::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'barber_id' => $this->faker->numberBetween(1, 5),
            'time_start' => $this->faker->word,
            'time_end' => $this->faker->word,
            'status' => $this->faker->numberBetween(0, 2),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
