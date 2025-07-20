<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Alumnos Matriculados</title>
</head>

<body>
    <h1>Lista de Matriculas</h1>

    <p> Aqui se listara todas las matriculas de la institucion </p>

    <a href="{{ route('private.enrollments.create') }}">Crear una Matricula</a>

    <ul>
        @foreach ($enrollments as $item)
            <li>
                {{ $item->id }}
                <a href="{{ route('private.enrollments.show', $item) }}">
                    {{ $item->student->dni_S }} | {{ $item->student->last_name_S }} {{ $item->student->middle_name_S }}
                    {{ $item->student->name_S }}
                </a>
            </li>
        @endforeach
    </ul>
    {{ $enrollments->links() }}
</body>

</html>
