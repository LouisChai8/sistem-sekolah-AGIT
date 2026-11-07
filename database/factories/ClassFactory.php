<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class ClassFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $schoolClasses = [
            'X AKL',
            'XI AKL',
            'XII AKL',
            'X TKJ 1',
            'X TKJ 2',
            'XI TKJ 1',
            'XI TKJ 2',
            'XII TKJ 1',
            'XII TKJ 3',
            'X BiD 1',
            'X BiD 2',
            'XI BiD',
            'XII BiD',
        ];
        return [
            'name' => fake()->unique()->randomElement($schoolClasses),
        ];
    }
}
