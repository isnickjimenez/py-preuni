<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Matricula para PreUni</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    {{-- fonteawesome --}}
    {{-- tipografia --}}
</head>

<body style="background-color: #5d881a;">
    <div class="flex items-center justify-center min-h-screen w-full max-w-5xl m-auto">
        <div class="appearance-none block w-full p-4 bg-white border border-gray-200 rounded py-3  leading-tight focus:outline-none focus:bg-white">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
