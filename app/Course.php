<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function students()  // FUNCTION DEFINES MANY TO MANY RELATION OF COURSE AND STUDENTS
    {
        // FETCHING DATA FROM PIVOT TABLE THAT JOIN STUDENT AND COURSE TABLES
        return $this->belongsToMany('App\Student', 'course_students', 'course_id', 'student_id');
    }
}
