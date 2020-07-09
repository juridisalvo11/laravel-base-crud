@extends('layouts.app')

@section('page-title', 'Nuovo studente')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12 mt-3 mb-3">
        <h1>Creazione nuovo studente : </h1>
      </div>
      <div class="w-50 m-auto">
        <form action="{{ route('students.store') }}" method="post">
          @csrf
          <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="firstname" class="form-control" id="nome" placeholder="Nome studente">
          </div>
          <div class="form-group">
            <label for="cognome">Cognome</label>
            <input type="text" name="lastname" class="form-control" id="cognome" placeholder="Cognome studente">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email studente">
          </div>
          <div class="form-group">
            <label for="matricola">Matricola</label>
            <input type="number" name="number" class="form-control" id="matricola" placeholder="Matricola studente">
          </div>
          <div class="text-center">  
            <button type="submit" class="btn btn-success">Aggiungi Studente</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
