<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamUser extends Model
{
    protected $table = 'exam_user';
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'exam_id',
        'user_id',
        'history_answer',
        'score',
    ];

    /**
     * Get the exam that the user took.
     */
    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }

    /**
     * Get the user who took the exam.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
