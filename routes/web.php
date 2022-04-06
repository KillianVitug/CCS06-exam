<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradingSystem;

Route::get('/',[GradingSystem::class,'getStudentNames']);
Route::get('student-grades', [GradingSystem::class, 'enterGrades']);
