<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    protected $table = 'student_classes';
    protected $fillable = [
         'class_name',
         'subject_id',
    ];

    public function subjects(){
        return $this->hasMany(Subject::class, 'subject_id');
    }
}
