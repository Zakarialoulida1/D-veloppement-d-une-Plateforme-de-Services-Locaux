<?php

namespace Database\Factories;

use App\Models\categorie;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\profiles>
 */
class profilesFactory extends Factory
{

     /**
     * The current password being used by the factory.
     */
    protected static ?string $password;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'titre'=>fake()->title(),
            'category_id'=> categorie::inRandomOrder()->first()->id,
            'bio'=>fake()->text(200)
        ];
    }
}
