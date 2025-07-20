<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1> Editar el Post {{ $enrollment->id }}</h1>

    {{-- Errores en listado --}}
    @if ($errors->any())
        <div>
            <h2>Errores:</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('private.enrollments.update', $enrollment->id) }}" method="POST">

        @csrf
        @method('PUT')

        <h3>Datos personales del alumnos</h3>

        <label for="">
            DNI del estudiante:
            <input type="text" name="dni_S" value="{{ old('dni_S', $enrollment->student->dni_S) }}">
        </label>
        <br><br>

        <label for="">
            Nombre(s):
            <input type="text" name="name_S" value="{{ old('name_S', $enrollment->student->name_S) }}">
        </label>
        <br><br>

        <label for="">
            Apellido Paterno:
            <input type="text" name="last_name_S" value="{{ old('last_name_S', $enrollment->student->last_name_S) }}">
        </label>
        <br><br>

        <label for="">
            Apellido Materno:
            <input type="text" name="middle_name_S" value="{{ old('middle_name_S', $enrollment->student->middle_name_S) }}">
        </label>
        <br><br>

        <label for="">
            Telefono:
            <input type="text" name="phone_S" value="{{ old('phone_S', $enrollment->student->phone_S) }}">
        </label>
        <br><br>

        <label for="">
            Direccion:
            <input type="text" name="address_S" value="{{ old('address_S', $enrollment->student->address_S) }}">
        </label>
        <br><br>

        <label for="">
            Colegio:
            <input type="text" name="school_S" value="{{ old('school_S', $enrollment->student->school_S) }}">
        </label>
        <br><br>

        <h3>Datos del Apoderado</h3>

        <label for="">
            DNI del Apoderado:
            <input type="text" name="dni_G" value="{{ old('dni_G', $enrollment->student->guardian->dni_G) }}">
        </label>
        <br><br>

        <label for="">
            Nombre(s):
            <input type="text" name="name_G" value="{{ old('name_G', $enrollment->student->guardian->name_G) }}">
        </label>
        <br><br>

        <label for="">
            Apellido Paterno:
            <input type="text" name="last_name_G" value="{{ old('last_name_G', $enrollment->student->guardian->last_name_G) }}">
        </label>
        <br><br>

        <label for="">
            Apellido Materno:
            <input type="text" name="middle_name_G" value="{{ old('middle_name_G', $enrollment->student->guardian->middle_name_G) }}">
        </label>
        <br><br>

        <label for="">
            Numero telefonico:
            <input type="text" name="phone_G" value="{{ old('phone_G', $enrollment->student->guardian->phone_G) }}">
        </label>
        <br><br>

        <label for="">
            Direccion:
            <input type="text" name="address_G" value="{{ old('address_G', $enrollment->student->guardian->address_G) }}">
        </label>
        <br><br>

        <h3>Datos de Matricula</h3>

        <label for="">
            Grupo:
            <input type="text" name="group_G" value="{{ old('group_G', $enrollment->group->group_G) }}">
        </label>
        <br><br>

        <label for="">
            Carrera:
            <input type="text" name="carrer_G" value="{{ old('carrer_G', $enrollment->group->carrer_G) }}">
        </label>
        <br><br>

        <button type="submit">Confirmar Matricula</button>
    </form>
</body>

</html>
