<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  protected $table = "students";
  protected $fillable = [
     'name',
     'email',
     'address',
     'city',
     'gender',
     'phone',
     'roll_id',

  ];

  public function subjects(){
    return $this->belongsToMany(Subject::class, 'student_subjects');
  }
  public function rollNumber(){
    return $this->hasOne(RollNumber::class);
  }
  public function marks(){
    return $this->hasMany(Mark::class);
  }

}
