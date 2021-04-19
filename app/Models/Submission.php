<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_uid',
        'questionnaire_id',
        'detail'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'detail' => 'array',
    ];

    /**
     * Get the questionnaire for the submission.
     */
    public function questionnaire()
    {
        return $this->belongsTo(Questionnaire::class, 'questionnaire_id', 'id');
    }

    /**
     * Get the user for the submission.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_uid', 'uid');
    }
}
