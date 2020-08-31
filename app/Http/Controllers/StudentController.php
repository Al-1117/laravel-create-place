<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
  public function index(){
    $students = [
      [
        'nome' => 'Marco',
        'cognome' => 'Bianchi',
      ],
      [
        'nome' => 'Giuseppe',
        'cognome' => 'Verdi',
      ],
      [
        'nome' => 'Leonardo',
        'cognome' => 'Gialli',
      ],
      [
        'nome' => 'Carlo',
        'cognome' => 'Garibaldi',
      ]
    ];

    return view('students', [
      'students' => $students,
    ]);
  }
}
