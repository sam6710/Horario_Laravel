<x-app-layout>
    <style>
        h1{
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
            width: 20%;
            margin-left: 2%;
        }
        button {
            margin: 10px 0 0 0;
            border: solid;
            border-radius: 5px;
        }
    </style>
    <h1>Nueva asignatura</h1>
    <form action="/asignaturas/crear" method="POST">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre">
        <label for="corto">Nombre Corto</label>
        <input type="text" id="corto">
        <label for="profesor">Profesor</label>
        <input type="text" id="profesor">
        <label for="color">Color</label>
        <input type="color" id="color">
        <input type="hidden" name="userId" value="{{ Auth::user()->id }}">
        <input type="submit" value="Crear">
    </form>
</x-app-layout>