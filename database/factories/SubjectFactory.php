<?php

namespace Database\Factories;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Subject>
 */
class SubjectFactory extends Factory
{
    protected $model = Subject::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $subjects = [
            'Pemograman Web Lanjutan',
            'Pemograman Web Dasar',
            'Pemograman Lanjutan'
        ];
        
        return [
            'name' => fake()->unique()->randomElement($subjects)
        ];
    }
}
