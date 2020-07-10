<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $students = Student::all();
      return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'firstname' => 'required|max:255',
          'lastname' => 'required|max:255',
          'email' => 'required|max:255',
          'number' => 'required|numeric|min:10000|max:999999',
        ]);

        $dati_nuovo_studente = $request->all();
        $new_student = new Student();
        $new_student->fill($dati_nuovo_studente);
        $new_student->save();
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
      // $student = Student::find($id);
      return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        // $student = Student::find($id);
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $request->validate([
        'firstname' => 'required|max:255',
        'lastname' => 'required|max:255',
        'email' => 'required|max:255',
        'number' => 'required|numeric|min:10000|max:999999',
      ]);

      $dati_nuovo_studente = $request->all();
      $student = Student::find($id);
      $student->update($dati_nuovo_studente);
      return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        if($student) {
          $student->delete();
        }        
        return redirect()->route('students.index');
    }
}
