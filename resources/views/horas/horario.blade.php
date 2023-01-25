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
            {{ __('Horario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div>
                    <table>
                        <tr>
                            <th>Hora/Día</th>
                            <th>Lunes</th>
                            <th>Martes</th>
                            <th>Miércoles</th>
                            <th>Jueves</th>
                            <th>Viernes</th>
                        </tr>
                        <?php
                            $hay=false;
                        ?>
                        @for ($i = 1; $i <= 6; $i++)
                            <tr>
                                <td>{{$i}}ª</td>
                                @for ($j = 1; $j <= 5; $j++)
                                    @for ($k = sizeof($horas)-1; $k>=0; $k--)                    
                                        @if ($horas[$k]->horaH==$i && $horas[$k]->diaH==$j)                  
                                            @foreach ($asignaturas as $asignatura)                            
                                                @if ($asignatura->id==$horas[$k]->codAs)
                                                    <td>{{$asignatura->nombreAs}}</td>    
                                                    <?php  $hay=true; ?>                                        
                                                @endif
                                            @endforeach
                                        @endif
                                        <!--Si no hay ningna asignatura a esa hora se deja en blanco-->
                                        @if ($k==0 && $hay==false)                                            
                                            <td> </td> 
                                        @endif
                                        <!--Cuando se ha recorrido todo el array se setea el valor de "hay" a falso-->
                                        @if ($k==0 && $hay==true)                                            
                                        <?php  $hay=false; ?>  
                                        @endif
                                    @endfor
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