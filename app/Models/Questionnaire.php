<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    use HasFactory;

    /**
     * Get the questions for the questionnaire.
     */
    public function questions()
    {
        return $this->hasMany(Question::class, 'questionnaire_id', 'id');
    }
}
