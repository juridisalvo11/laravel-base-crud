@extends('layouts.app')

@section('page-title', 'Elenco Studenti')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex justify-content-between align-items-center mt-3 mb-3">
            <h1>Elenco Studenti : </h1>
            <a class="btn btn-success" href="{{ route('students.create')}}">Nuovo Studente</a>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Cognome</th>
              <th>Email</th>
              <th>Matricola</th>
              <th>Azioni</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($students as $student)
              <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->firstname}}</td>
                <td>{{$student->lastname}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->number}}</td>
                <td>
                  <a class="btn btn-info btn-sm" href="{{route('students.show', ['student' => $student->id])}}">Dettagli</a>
                  <a class="btn btn-warning btn-sm" href="{{route('students.show', ['student' => $student->id])}}">Modifica</a>
                  <a class="btn btn-danger btn-sm" href="{{route('students.show', ['student' => $student->id])}}">Elimina</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
