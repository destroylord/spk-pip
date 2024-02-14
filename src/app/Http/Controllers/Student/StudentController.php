<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function registration()
    {
        return view('student-registration-form');
    }

    public function store(Request $request)
    {
       
        // dd($request->all());
        Student::create($request->all());
    
    }
}
