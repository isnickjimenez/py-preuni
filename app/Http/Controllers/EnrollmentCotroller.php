<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Group;
use App\Models\Guardian;
use App\Models\Student;
use Illuminate\Http\Request;

class EnrollmentCotroller extends Controller
{
    public function index()
    {
        $enrollments = Enrollment::with('student')
            ->orderBy('id', 'desc')
            ->paginate(20);

        return view('dashboard.enrollments.index', compact('enrollments'));
    }

    public function create()
    {
        return view('dashboard.enrollments.create');
    }

    public function store(Request $request)
    {
        $guardia = Guardian::firstOrCreate(
            ['dni_G' => $request->dni_G,],                  // Aqui busca si con el dni ya existe el guardian
            [
                'name_G' => $request->name_G,
                'last_name_G' => $request->last_name_G,
                'middle_name_G' => $request->middle_name_G,
                'phone_G' => $request->phone_G,
                'address_G' => $request->address_G
            ]
        );

        $student = Student::firstOrCreate(
            ['dni_S' => $request->dni_S],
            [
                'name_S' => $request->name_S,
                'last_name_S' => $request->last_name_S,
                'middle_name_S' => $request->middle_name_S,
                'phone_S' => $request->phone_S,
                'address_S' => $request->address_S,
                'school_S' => $request->school_S,
                // 'gradoE' => $request->gradoE,            // Falta crear en la base de datos
                'guardian_id' => $guardia->id,
            ]
        );

        $group = Group::create([
            'group_G' => $request->group_G,
            'carrer_G' => $request->carrer_G,
        ]);

        $enrollment = Enrollment::create([
            'student_id' => $student->id,
            'group_id' => $group->id,
            'enrollment_date' => now(),
        ]);

        return redirect()->route('private.enrollments.index');
    }

    public function show($enrollment)
    {
        $enrollment = Enrollment::with('student')
            ->findOrFail($enrollment);

        return view('dashboard.enrollments.show', compact('enrollment'));
    }

    public function edit(Enrollment $enrollment)
    {
        $enrollment->load(['student.guardian', 'group']);
        // $group = Group::all();
        // return $enrollment;
        return view('dashboard.enrollments.edit', compact('enrollment'));
    }

    public function update(Request $request, Enrollment $enrollment)
    {
        // Validar datos (puedes personalizar esto más)
        $request->validate([
            'dni_S' => 'required|max:8',
            'name_S' => 'required|max:50',
            'last_name_S' => 'required|max:50',
            'middle_name_S' => 'required|max:50',
            'phone_S' => 'required|max:15',
            'address_S' => 'required|max:15',
            'school_S' => 'required|max:100',

            'dni_G' => 'required|max:8',
            'last_name_G' => 'required|max:50',
            'middle_name_G' => 'required|max:50',
            'phone_G' => 'required|max:15',
            'address_G' => 'required|max:100',

            'group_G' => 'required',
            'carrer_G' => 'required',
        ]);

        // Actualizar apoderado
        $guardian = $enrollment->student->guardian;
        $guardian->update([
            'dni_G' => $request->dni_G,
            'name_G' => $request->name_G,
            'last_name_G' => $request->last_name_G,
            'middle_name_G' => $request->middle_name_G,
            'phone_G' => $request->phone_G,
            'address_G' => $request->address_G
        ]);

        // Actualizar estudiante
        $student = $enrollment->student;
        $student->update([
            'dni_S' => $request->dni_S,
            'name_S' => $request->name_S,
            'last_name_S' => $request->last_name_S,
            'middle_name_S' => $request->middle_name_S,
            'phone_S' => $request->phone_S,
            'address_S' => $request->address_S,
            'school_S' => $request->school_S,
            // 'gradoE' => $request->gradoE,            // Falta crear en la base de datos
        ]);

        // Actualizar estudiante
        $student = $enrollment->group;
        $student->update([
            'group_G' => $request->group_G,
            'carrer_G' => $request->carrer_G,
        ]);

        return redirect()->route('private.enrollments.show', $enrollment);
    }

    public function destroy(Enrollment $enrollment)
    {
        // Falta eliminar 
        $enrollment->load(['student.guardian', 'group']);

        $student = $enrollment->student;
        $guardian = $student->guardian;
        $group = $enrollment->group;

        // Eliminar matrícula
        $enrollment->delete();

        // Eliminar estudiante si no tiene más matrículas
        if ($student->enrollments()->count() === 0) {
            $student->delete();

            // Eliminar apoderado si ya no tiene estudiantes
            if ($guardian->students()->count() === 0) {
                $guardian->delete();
            }
        }

        // Eliminar grupo si ya no tiene más matrículas
        if ($group->enrollments()->count() === 0) {
            $group->delete();
        }
        return redirect()->route('private.enrollments.index');
    }
}
