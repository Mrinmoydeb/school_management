<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = "subjects";
    protected $fillable = [
        'subject_name',

    ];


    public function students(){
        return $this->belongsToMany(Student::class, 'student_subjects');
    }
    public function marks(){
        return $this->hasMany(Mark::class);
    }
    public function studentClass(){
        return $this->belongsTo(StudentClass::class);
    }
}
