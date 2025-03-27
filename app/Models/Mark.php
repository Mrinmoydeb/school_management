<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Mockery\Matcher\Subset;

class Mark extends Model
{
    protected $table = 'marks';
    protected $fillable = [
        'mark',
        'student_id',
        'teacher_id',
        'subject_id',
    ];
    public function students(){
        return $this->belongsTo(Student::class, 'student_id');
    }
    public function teacher(){
        return $this->belongsTo(User::class, 'teacher_id');
    }
    public function subject(){
        return $this->belongsTo(Subject::class, 'subject_id');
    }
}
