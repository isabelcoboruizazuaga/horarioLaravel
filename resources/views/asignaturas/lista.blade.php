<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Laravel</title>

    <style>
        table,
        td,
        th {
            border: 1px solid black;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th {
            height: 70px;
        }

        td {
            height: 30px;
        }

        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
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
                    <table>
                        <tr>
                            <th>Nombre</th>
                            <th>Abreviatura</th>
                            <th>Profesor</th>
                            <th>Color</th>
                        </tr>

                        @foreach ($asignaturas as $asignatura)
                        <tr>
                            <td>{{ $asignatura->nombreAs }}</td>
                            <td>{{ $asignatura->nombreCortoAs }}</td>
                            <td>{{ $asignatura->profesorAs }}</td>
                            <td>{{ $asignatura->colorAs }}</td>
                            <td>
                                <a href="/asignaturas/ver/{{$asignatura->id}}">Ver</a>
                                <a href="/asignaturas/editar/{{$asignatura->id}}">Editar</a>
                                <a href="/asignaturas/eliminar/{{$asignatura->id}}" onclick="return eliminarAsignatura('Eliminar Asignatura')"> Eliminar</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                    <br>
                    <a href="/asignaturas/crear">Nuevo asignatura</a>
                    <a href="/asignaturas/formulario">Saludarte</a>
                    </body>

                    <script>
                        function eliminarAsignatura(value) {
                            action = confirm(value) ? true : event.preventDefault()
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>