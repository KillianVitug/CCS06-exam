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
        
        return view('enter-grades' , [
            'student_1' => $student_1,
            'student_2' => $student_2,
            'student_3' => $student_3,
            'student_4' => $student_4,
            'student_5' => $student_5
        ]);
    }

    protected function computeFinalGrade($grade1, $grade2)
    {
        $computedGrade = ($grade1 + $grade2) / 2;
        return round($computedGrade, 2);   
    }

    protected function giveRemarks($average)
    {
        if ($average >= 75) {
            $remark = "PASSED";
        } else {
            $remark = "FAILED";
        } 
        return $remark;
    }

    public function computedGrades (Request $request)
    {
        $student_1 = $request->student_1;
        $student_2 = $request->student_2;
        $student_3 = $request->student_3;
        $student_4 = $request->student_4;
        $student_5 = $request->student_5; 

        $s1_finalGrade = $this->computeFinalGrade($request->s1_1stGrade, $request->s1_2ndGrade);
        $s2_finalGrade = $this->computeFinalGrade($request->s2_1stGrade, $request->s2_2ndGrade);
        $s3_finalGrade = $this->computeFinalGrade($request->s3_1stGrade, $request->s3_2ndGrade);
        $s4_finalGrade = $this->computeFinalGrade($request->s4_1stGrade, $request->s4_2ndGrade);
        $s5_finalGrade = $this->computeFinalGrade($request->s5_1stGrade, $request->s5_2ndGrade);
        
        $s1_remark =  $this->giveRemarks($s1_finalGrade);
        $s2_remark =  $this->giveRemarks($s2_finalGrade);
        $s3_remark =  $this->giveRemarks($s3_finalGrade);
        $s4_remark =  $this->giveRemarks($s4_finalGrade);
        $s5_remark =  $this->giveRemarks($s5_finalGrade);

        return view('computed-grades', [
            'student_1' => $student_1,
            'student_2' => $student_2,
            'student_3' => $student_3,
            'student_4' => $student_4,
            'student_5' => $student_5,
            
            //Student 1 Final Grade
            's1_1stGrade' => $request->s1_1stGrade,
            's1_2ndGrade' => $request->s1_2ndGrade,
            's1_finalGrade' => $s1_finalGrade,
            's1_remark' => $s1_remark,


            //Student 2 Final Grade
            's2_1stGrade' => $request->s2_1stGrade,
            's2_2ndGrade' => $request->s2_2ndGrade,
            's2_finalGrade' => $s2_finalGrade,
            's2_remark' => $s2_remark,

            //Student 3 Final Grade
            's3_1stGrade' => $request->s3_1stGrade,
            's3_2ndGrade' => $request->s3_2ndGrade,
            's3_finalGrade' => $s3_finalGrade,
            's3_remark' => $s3_remark,

            //Student 4 Final Grade
            's4_1stGrade' => $request->s4_1stGrade,
            's4_2ndGrade' => $request->s4_2ndGrade,
            's4_finalGrade' => $s4_finalGrade,
            's4_remark' => $s4_remark,

            //Student 5 Final Grade
            's5_1stGrade' => $request->s5_1stGrade,
            's5_2ndGrade' => $request->s5_2ndGrade,
            's5_finalGrade' => $s5_finalGrade,
            's5_remark' => $s5_remark

        ]);
    }
}
