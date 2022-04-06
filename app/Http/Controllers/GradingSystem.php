<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GradingSystem extends Controller
{
    public function getStudentNames()
    {
        return view('students');
    }

    public function enterGrades (Request $request)
    {
        $student_1 = $request->student_1;
        $student_2 = $request->student_2;
        $student_3 = $request->student_3;
        $student_4 = $request->student_4;
        $student_5 = $request->student_5;
        
        return view('student-grades' , [
            'student_1' => $student_1,
            'student_2' => $student_2,
            'student_3' => $student_3,
            'student_4' => $student_4,
            'student_5' => $student_5
        ]);
    }
}
