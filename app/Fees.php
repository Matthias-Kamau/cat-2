<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fees extends Model
{
    public function students()
    {
        return $this->belongsTo('app/Student', 'student_number','student_number');
    }
}
