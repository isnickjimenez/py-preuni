<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Models\Enrollment;
use App\Models\Group;
use App\Models\Guardian;
use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function prepage()
    {
        return view('public.welcome');
    }

    public function create()
    {
        return view('components.query');
    }

    public function store(StoreStudentRequest    $request)
    {
         dd($request->all());

        $guardia = Guardian::firstOrCreate(
            ['dni_G' => $request->dni_G,],                  // Aqui busca si con el dni ya existe el guardian
            [
                'name_G' => $request->name_G,
                'last_name_G' => $request->last_name_G,
                'middle_name_G' => $request->middle_name_G,
                'slug_name_G' => $request->slug_name_G,
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
                'slug_name_S' => $request->slug_name_S,            // Falta crear en la base de datos
                'phone_S' => $request->phone_S,
                'address_S' => $request->address_S,
                'school_S' => $request->school_S,
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

        return view('public.success');      // Ojo por que redireciona a una lista de matriculasdos
    }
}
