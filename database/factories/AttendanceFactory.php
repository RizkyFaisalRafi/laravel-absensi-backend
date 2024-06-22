<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attendance>
 */
class AttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'user_id' => 1,
                'date' => $this->faker->date(),
                'time_in' => $this->faker->time(),
                'time_out' => $this->faker->time(),
                'latlong_in' => $this->faker->latitude() . ',' . $this->faker->longitude(),
                'latlong_out' => $this->faker->latitude() . ',' . $this->faker->longitude(),

        ];
    }
}
