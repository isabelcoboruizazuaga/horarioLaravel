<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Horas</title>

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


        .bg-white>div {
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
                            <th>Dia</th>
                            <th>Hora</th>
                            <th>Asignatura</th>
                        </tr>

                        @foreach ($horas as $hora)
                        <tr>
                            @switch($hora->diaH)
                            @case(1)
                                <td> Lunes </td>
                            @break
                            @case(5)
                                <td>Viernes </td>
                            @break
                            @case(2)
                                <td>Martes </td>
                            @break
                            @case(3)
                                <td> Miércoles </td>
                            @break
                            @case(4)
                                <td> Jueves </td>
                            @break
                            @endswitch
                            
                            <td>{{ $hora->horaH }}ª</td>
                            <td>{{ $hora->codAs }}</td>
                            <td>
                                <a href="/horas/ver/{{$hora->horaH,$hora->diaH}}">Ver</a>
                                <a href="/horas/editar/{{$hora->horaH,$hora->diaH}}">Editar</a>
                                <a href="/horas/eliminar/{{$hora->horaH,$hora->diaH}}" onclick="return eliminarHora('Eliminar Hora')"> Eliminar</a>
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