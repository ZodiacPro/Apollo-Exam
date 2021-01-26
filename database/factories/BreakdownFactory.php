<?php

namespace Database\Factories;

use App\Models\Breakdown;
use App\Models\Random;
use Illuminate\Database\Eloquent\Factories\Factory;

class BreakdownFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Breakdown::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'values' => $this->faker->text(20),
            'randoms_id' =>Random::inRandomOrder()->first()->id,
        ];
    }
}
