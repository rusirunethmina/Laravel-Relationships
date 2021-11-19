<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $data = Employee::with('department')->where('id',2)->get();
        return response()->json($data);
    }
}
