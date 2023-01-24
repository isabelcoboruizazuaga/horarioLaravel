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
            {{ __('Horas') }}
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
                        </tr>

                        @foreach ($horas as $hora)
                        <tr>
                            <td>{{ $hora->horaH }}</td>
                            <td>{{ $hora->diaH }}</td>
                            <td>
                                <a href="/horas/ver/{{$hora->id}}">Ver</a>
                                <a href="/horas/editar/{{$hora->id}}">Editar</a>
                                <a href="/horas/eliminar/{{$hora->id}}" onclick="return eliminarHora('Eliminar Hora')"> Eliminar</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                    <br>
                    <a href="/horas/crear">Nueva hora</a>
                    </body>

                    <script>
                        function eliminarHora(value) {
                            action = confirm(value) ? true : event.preventDefault()
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>