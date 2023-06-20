<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Type;
use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posting>
 */
class PostingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           
                'title' => $this->faker->sentence,
                'deadline' => $this->faker->dateTime,
                'publish' => $this->faker->boolean,
                'description' => $this->faker->paragraph,
                'email' => fake()->unique()->safeEmail(),
                'user_id' => User::all()->random(),
                'type_id' => Type::all()->random(),
                'department_id' => Department::all()->random(),
        ];
    }
}
