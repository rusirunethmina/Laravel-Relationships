<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function create(Request $request)
    {
        Course::create([
             'name' => $request->cname,
             'date' => $request->date,
             'time' => $request->time,
         ]);

         return redirect('/');
    }

    public function show()
    {
        $course_data = Course::get();
        return view('welcome', ['course' => $course_data]);
    }
}
