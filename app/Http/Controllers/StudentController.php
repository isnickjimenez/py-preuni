<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Models\Enrollment;
use App\Models\Guardian;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::orderBy('id', 'desc')
            ->paginate(10);
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(StoreStudentRequest $request_student)
    {
        $student = Student::create($request_student->all());
        return $student;
        // $guardian = Guardian::created(Guardian $request_)

        Enrollment::create(['student_id' => $student->id]);

        //Ojo el redireccionamento por que dependera si es usuario normal o administrado
        return redirect()->route('matriculados.invoke');
    }

    public function show(Student $students)
    {
        return view('students.show', compact('students'));
    }

    public function edit(Student $students)
    {
        return view('students.edit', compact('students'));
    }
    public function update(Request $request, Student $students)
    {
        $request->validate([
            'dniE' => 'required|max:8',
            'nameE' => ['required', 'min:1', 'max:50'],
            'firtsNameE' => "required|min:1|max:50",
            'secondNameE' => "required|min:1|max:50",
            'phoneNumberE' => "required",
            'schoolE' => "required",
        ]);

        $students->update($request->all());

        return redirect()->route('students.show', $students);
    }
    public function destroy(Student $students)
    {
        $students->delete();
        return redirect()->route('students.index');
    }
}
