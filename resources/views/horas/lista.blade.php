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
                            <th>Día/Hora</th>
                            <th>Lunes</th>
                            <th>Martes</th>
                            <th>Miércoles</th>
                            <th>Jueves</th>
                            <th>Viernes</th>
                        </tr>

                        @for ($i = 1; $i <= 6; $i++)
                            <tr>
                                <td>{{$i}}ª</td>
                                @for ($j = 1; $j <= 5; $j++)
                                    @foreach ($horas as $hora)                            
                                        @if ($hora->horaH==$i && $hora->diaH==$j)
                                            <td>{{$hora->codAs}}</td>
                                        @endif
                                    @endforeach
                                @endfor
                            </tr>
                        @endfor
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