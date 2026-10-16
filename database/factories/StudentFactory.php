<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Student>
 */
class StudentFactory extends Factory
{
    protected $model = Student::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nis' => fake()->unique()->numerify('####'),
            'name' => fake()->name(),
            'gender' => fake()->randomElement(['Laki-laki', 'Perempuan']),
            'class' => fake()->randomElement(['X AKL', 'XI AKL', 'XII AKL', 'X BiD', 'XI BiD', 'XII BiD', 'X TKJ', 'XI TKJ', 'XII TKJ 1', 'XII TKJ 2']),
            'major' => fake()->randomElement(['AKL', 'BiD', 'TKJ']),
        ];
    }
}
