<?php

namespace Database\Factories;

use App\Models\Questionnaire;
use App\Models\Submission;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SubmissionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Submission::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_uid' => User::factory(),
            'questionnaire_id' => Questionnaire::factory(),
            'detail' => "{'question_id': 1, 'value': 'blue', 'question_id': 2, 'value': true}"
        ];
    }
}
