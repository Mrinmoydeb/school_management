<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RollNumber extends Model
{
    protected $table = "roll_numbers";
    protected $fillable = [
        'roll_no',
    ];
    public function student(){
        return $this->belongsTo(Student::class);
    }
}
