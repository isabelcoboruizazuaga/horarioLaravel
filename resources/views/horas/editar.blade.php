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
                    <form action="/asignaturas/editar/{{ $asignatura->id}}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}                        
                        <label>Día:</label>
                        <input type="number" id="diaH" name="diaH" min="1" max="5"  value="{{ $hora->horaH}}"/>
                        <label>Hora:</label>
                        <input type="number" id="horaH" name="horaH" min="1" max="6" value="{{ $hora->diaH}}"/>
                        <label>Asignatura:</label>
                        <select name="codAs">
                            @foreach($asignaturas as $asignatura)
                            <option value="{{ $asignatura->id }}" {{ ({{ $hora->codAs}} == $asignatura->id) ? 'selected' : '' }}>{{ $asignatura->nombreAs}}</option>
                            @endforeach
                        </select>
                        <input type="submit" value="Guardar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>