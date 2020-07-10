@extends('layouts.app')

@section('page-title', 'Modifica studente')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12 mt-3 mb-3">
        <h1>Modifica dati studente : </h1>
      </div>
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      <div class="w-50 m-auto">
        <form action="{{ route('students.update', ['student' => $student->id]) }}" method="post">
          @method('PUT')
          @csrf
          <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="firstname" class="form-control" id="nome" placeholder="Nome studente" value="{{old('firstname', $student->firstname)}}">
            @error ('firstname')
              <small class="text-danger"> {{$message}} </small>
            @enderror
          </div>
          <div class="form-group">
            <label for="cognome">Cognome</label>
            <input type="text" name="lastname" class="form-control" id="cognome" placeholder="Cognome studente" value="{{old('lastname', $student->lastname)}}">
            @error ('lastname')
              <small class="text-danger"> {{$message}} </small>
            @enderror
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email studente" value="{{old('email', $student->email)}}">
            @error ('email')
              <small class="text-danger"> {{$message}} </small>
            @enderror
          </div>
          <div class="form-group">
            <label for="matricola">Matricola</label>
            <input type="number" name="number" class="form-control" id="matricola" placeholder="Matricola studente" value="{{old('number', $student->number)}}">
            @error ('number')
              <small class="text-danger"> {{$message}} </small>
            @enderror
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-success">Aggiungi Studente</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
