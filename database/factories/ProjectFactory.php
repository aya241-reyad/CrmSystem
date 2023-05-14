<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>$this->faker->unique()->sentence(),
            'description'=>$this->faker->realText($maxNbChars=100),
            'deadline'=>$this->faker->date('Y_m_d'),
            'user_id'=>function () {
            return User::all()->random();
        },
        
            'client_id'=>function () {
            return Client::all()->random();
        },

        ];
    }
}
