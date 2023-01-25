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
    <h1>Crear Hora</h1>
    <form action="/horas/crear" method="POST">
        <label for="hora">Hora</label>
        <select name="horas" id="hora">
            <option value="1ª">8:15-9:15</option>
            <option value="2ª">9:15-10:15</option>
            <option value="3ª">10:15-11:15</option>
            <option value="4ª">11:45-12:45</option>
            <option value="5ª">12:45-13:45</option>
            <option value="6ª">13:45-14:45</option>
        </select>
        <label for="dia"></label>
        <select name="dias" id="dia">
            <option value="d1">Lunes</option>
            <option value="d2">Martes</option>
            <option value="d3">Miércoles</option>
            <option value="d4">Jueves</option>
            <option value="d5">Viernes</option>
        </select>
        <input type="submit" value="Crear">
    </form>
</x-app-layout>