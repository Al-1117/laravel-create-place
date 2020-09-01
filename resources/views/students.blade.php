@extends('layouts/app');

@section('title')
  Students
@endsection

@section('content')
  <h1>Pagina students</h1>

  {{-- Lista studenti --}}

  <div class="students">

    @foreach ($students as $student)

      <ul>
        <li> Nome: {{$student['nome']}}</li>
        <li> Cognome: {{$student['cognome']}}</li>
      </ul>
    @endforeach
  </div>

@endsection
