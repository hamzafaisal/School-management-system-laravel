<?php

namespace App\Http\Controllers;

use DB;
use App\Teacher;
use App\Course;
use App\Student;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $courses = Course::latest()->get(); 
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        $teachers = Teacher::latest()->get(); // Fetching All Teachers From DB in DESC Order
        return view('courses.create', compact('teachers'));
    }

    public function store(Request $request)
    {   
        $course = new Course();
        $course->name = $request->name;
        $course->teacherName = $request->teacherName;
        $course->section = $request->section;
        $course->creditHours = $request->creditHours;
        $course->class = $request->class;
        $course->classTime = $request->classTime;
        $course->save();

        return redirect('/home')->with('success', 'Added Successfully');
    }

    public function show($id)
    {
        $students = Student::latest()->get(); // Fetching All students From DB to show them in select student enroll list
        $course = Course::where('id', $id)->first();

        $courseStudents = Course::find($id)->students; // FETCHING DATA FROM PIVOT TABLES OF ENROLLED STUDENTS

        return view('courses.show', compact('course', 'students', 'courseStudents'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id); 
        $course->delete();

        return redirect('/courses');
    }
}
