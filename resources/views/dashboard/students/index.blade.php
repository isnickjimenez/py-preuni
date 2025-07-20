<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar a los estudiantes</title>
</head>

<body>
    <h1>Listas de estudiantes Matriculados</h1>

    <p> Aqui se listara todos los estudiantes matriculados de la institucion </p>

    <a href="{{ route('students.create') }}">Matricular Estudiante</a>
    
    <ul>
        @foreach ($students as $item)
            <li>
                <a href="{{ route('students.show', $item) }}">
                    {{ $item->id }} {{ $item->firtsNameE }} {{ $item->secondNameE }}, {{ $item->nameE }} |
                    {{ $item->dni }}
                </a>
            </li>
        @endforeach
    </ul>
    {{ $students->links() }}
</body>

</html>
