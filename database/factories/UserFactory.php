<?php

namespace Database\Factories;

use App\Models\Avatar;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $avatar= Avatar::all()->random();
        return [
            'name' => $this->faker->name(),
            'firstname' => $this->faker->firstName,
            'email' => $this->faker->unique()->safeEmail(),
            'money' => $this->faker->randomFloat(2, 0, 100),
            'avatar_id' => $avatar->id,
            'email_verified_at' => now(),
            'password' => 'test', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
