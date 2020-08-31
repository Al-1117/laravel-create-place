<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Indirizzo route students

Route::get('/students', function () {

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
    ]
  ];

  return view('students', [
    'students' => $students,
  ]);

});
