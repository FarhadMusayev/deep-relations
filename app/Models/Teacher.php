<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Teacher extends Model
{
    use HasFactory;

//    public function payments(): BelongsToMany
//    {
//        return $this->belongsToMany(
//            Payment::class,
//            'payments',
//            'teacher_id',
//            'student_id')
//            ->withPivot('lesson_id')
//            ->join(
//                'lessons',
//                'lesson_id',
//                '=',
//                'lessons.id');
//    }
}
