<x-app-layout>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 max-w-7xl mx-auto" id="formEdit">
        <h1>Ver asignatura</h1>
        <div>
            <p>Nombre: {{ $asignatura->nombreAs}}</p>
            <p>Nombre corto: {{ $asignatura->nombreCortoAs}}</p>
            <p>Profesor: {{ $asignatura->profesorAs}}</p>
            <p>Color: <input type="color" value="{{ $asignatura->colorAs}}" disabled></p>
        </div>
    </div>
</x-app-layout>