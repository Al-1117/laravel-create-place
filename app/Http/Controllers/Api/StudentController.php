<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
  public function index (){

    $students = Student::all();

    // Ritorno i dati degli studneti in formato JSON
    
    return response()->json([
      'students' => $students
    ]);

  }
}
