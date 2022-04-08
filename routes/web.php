<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradingSystem;

Route::get('/',[GradingSystem::class,'getStudentNames']);
Route::post('enter-grades', [GradingSystem::class, 'enterGrades']);
Route::post('computed-grades',[GradingSystem::class, 'computedGrades']);
