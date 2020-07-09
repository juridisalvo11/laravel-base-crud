@extends('layouts.app')

@section('page-title', 'Dati studente')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Dati Studente : </h1>
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
            <tr>
              <td>{{$student->id}}</td>
              <td>{{$student->firstname}}</td>
              <td>{{$student->lastname}}</td>
              <td>{{$student->email}}</td>
              <td>{{$student->number}}</td>
              <td>
                <a class="btn btn-info" href="{{route('students.show', ['student' => $student->id])}}">Dettagli</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
