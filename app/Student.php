<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function courses()   // FUNCTION DEFINES MANY TO MANY RELATION OF COURSE AND STUDENTS
    {
        // FETCHING DATA FROM PIVOT TABLE THAT JOIN STUDENT AND COURSE TABLES
        return $this->belongsToMany('App\Course', 'course_students', 'student_id', 'course_id');
    }
}
