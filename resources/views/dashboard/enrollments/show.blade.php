<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudiante</title>
</head>

<body>
    <h1>Matricula {{ $enrollment->id }} </h1>

    <ul>
        <li>
            <h2>
                {{ $enrollment->student->last_name_S }} {{ $enrollment->student->middle_name_S }},
                {{ $enrollment->student->name_S }}
            </h2>
        </li>
        <li>
            {{ $enrollment->student->dni_S }}
        </li>
        <li>
            {{ $enrollment->student->phone_S }}
        </li>
        <li>
            {{ $enrollment->student->school_S }}
        </li>
    </ul>

    <p>Aqui se verean todos los datos referidos a el usuario</p>

    <a href="{{ route('private.enrollments.edit', $enrollment) }}">Modificar Estudiante</a>
    <form action="{{ route('private.enrollments.destroy', $enrollment) }}" method="POST">
        @csrf
        @method('DELETE')
        <button>
            Eliminar Estudiante
        </button>
    </form>

</body>

</html>
