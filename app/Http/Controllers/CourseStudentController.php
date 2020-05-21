<?php

namespace App\Http\Controllers;

use App\CourseStudent;
use Illuminate\Http\Request;

class CourseStudentController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $enroll = new CourseStudent();
        $enroll->student_id = $request->student_id;
        $enroll->course_id = $request->course_id;
        $enroll->save();

        return redirect()->back();
    }

    public function show($id)
    {
        //
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
        //
    }
}
