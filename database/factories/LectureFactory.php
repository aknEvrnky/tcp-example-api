<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lecture>
 */
class LectureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->words(3, true),
            'code' => $this->generateLessonCode(),
            'description' => $this->faker->paragraphs(3, true),
        ];
    }

    protected function generateLessonCode(): string
    {
        return $this->faker->unique()->regexify('[A-Z]{3}[0-9]{3}');
    }
}
