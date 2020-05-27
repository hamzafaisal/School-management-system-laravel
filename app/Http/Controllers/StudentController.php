<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $students = Student::latest()->get(); // Fetching All Students From DB in DESC Order
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = "student";
        $user->save();
        
        $userId = $user->id; // get created user id
        
        $student = new Student();
        $student->username = $request->username;
        $student->email = $request->email;
        $student->rollNo = $userId; // insert as roll no
        $student->save();

        return redirect('/students')->with('success', 'Added Successfully');
    }

    public function show($id)
    {
        $student = Student::where('rollNo', $id)->first();

        $enrollCourses = Student::where('rollNo', $id)->first()->courses; // FETCHING DATA FROM PIVOT TABLE OF STUDENT ENROLLED COURSES

        return view('students.show', compact('student', 'enrollCourses'));
    }

 
    public function edit($id)
    {
        $student = Student::where('rollNo', $id)->first();
        // dd($student);
        return view('students.edit', compact('student'));
    }

    public function update(Request $request)
    {
        $student = Student::where('rollNo', $request->rollNo)->first();
        $student->phone = $request->phone;
        $student->address = $request->address;

        $student->save();

        return redirect('/students' . "/" .$student->rollNo);

    }

    public function destroy($id)
    {
        $user = User::findOrFail($id); // GET USER OF CORRESSPONDING STUDENT
        $student = Student::where('rollNo', $id)->first(); // GET STUDENT PROFILE

        $user->delete();
        $student->delete();

        return redirect('/students');
    }
}
