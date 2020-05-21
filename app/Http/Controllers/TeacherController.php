<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Teacher;
use App\Course;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $dept = request('dept');
        $teachers = Teacher::latest()->get(); 
        return view('teachers.index', compact('teachers', 'dept'));
    }

    public function create()
    {
        return view('teachers.create');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = "teacher";
        $user->save();
        
        $userId = $user->id; // get created user id
        
        $teacher = new Teacher();
        $teacher->username = $request->username;
        $teacher->email = $request->email;
        $teacher->department = $request->department;
        $teacher->designation = $request->designation;
        $teacher->qualification = $request->qualification;
        $teacher->universityId = $userId; // insert as universityId of teacher
        $teacher->save();

        return redirect('/teachers?dept=Primary')->with('success', 'Added Successfully');
    }

    public function show($id)
    {
        $teacher = Teacher::where('universityId', $id)->first();    // fetching teacher of this id 
        $teacherCourses = Course::where('teacherName', $teacher->username)->get();    // fetching couses of teacher by name 

        return view('teachers.show', compact('teacher', 'teacherCourses'));
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
        $user = User::findOrFail($id); // GET USER OF CORRESSPONDING TEACHER
        $teacher = Teacher::where('universityId', $id)->first(); // GET TEACHER PROFILE

        $user->delete();
        $teacher->delete();

        return redirect('/teachers');
    }
}
