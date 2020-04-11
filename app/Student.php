<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function Fees()
    {
        return $this->hasMany('app/Fees', 'student_number','student_number');
    }
}
