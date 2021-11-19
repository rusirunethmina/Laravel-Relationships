<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Student;
use App\Models\Course;

class StudentController extends Controller
{
    public function create(Request $request)
    {
        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'course_id' => $request->course_id,
        ]);

        return redirect('/');
    }

    public function show()
    {
        $data = Course::with('student')->get();
        return view('welcome', ['dataaa' => $data]);
    }
}
