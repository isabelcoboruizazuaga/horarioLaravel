<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Laravel</title>

    <style>

        input[type=text],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .bg-white > div {
            padding: 20px;
        }
    </style>
</head>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Asignaturas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div>
                    <form action="/asignaturas/crear" method="POST">
                        @csrf
                        <label>Código asignatura:</label>
                        <input type="number" name="id" placeholder="Código de la asignatura">
                        <br>
                        <label>Nombre Asignatura:</label>
                        <input type="text" name="nombreAs" placeholder="Nombre de la asignatura">
                        <label>Nombre Corto Asignatura:</label>
                        <input type="text" name="nombreCortoAs" placeholder="Nombre corto de la asignatura">
                        <label>Profesor Asignatura:</label>
                        <input type="text" name="profesorAs" placeholder="Profesor de la asignatura">
                        <label>Color Asignatura:</label>
                        <input type="text" name="colorAs" placeholder="Color de la asignatura">
                        <input type="hidden" name="user_id" value="{{optional(Auth::user())->id;}}" >
                        <input type="submit" value="Guardar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>