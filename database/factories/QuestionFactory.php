<?php

namespace Database\Factories;

use App\Models\Question;
use App\Models\Questionnaire;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Question::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'questionnaire_id' => Questionnaire::factory(),
            'label' => $this->faker->text,
            'type' => $this->faker->randomElement(['text', 'select', 'boolean']),
            'required' => $this->faker->boolean,
            'options' => null,
        ];
    }
}
