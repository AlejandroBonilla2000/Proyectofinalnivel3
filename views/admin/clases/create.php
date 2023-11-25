<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nueva Clase</title>
    <link href="/dist/output.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <div class="container mx-auto my-8 p-8 bg-white shadow-md rounded-md">

        <h1 class="text-3xl font-bold mb-6 text-gray-800">Crear Nueva Clase</h1>
        <a href="/clases"
            class="inline-block bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded-md transition-colors duration-300">Back</a>

        <form action="/clases/create" method="POST" class="max-w-md mx-auto">
            <!-- Agrega los campos necesarios para crear una clase -->
            <div class="mb-4">
                <label for="nombreClase" class="block text-sm font-medium text-gray-700">Nombre de la Clase:</label>
                <input type="text" name="nombreClase" class="mt-1 p-2 border rounded-md w-full" required>
            </div>

            <div class="mb-4">
                <label for="maestroID" class="block text-sm font-medium text-gray-700">Maestro Asignado:</label>
                <input type="text" name="maestroID" class="mt-1 p-2 border rounded-md w-full" required>
            </div>

            <div class="mb-4">
                <label for="alumnosInscritos" class="block text-sm font-medium text-gray-700">Alumnos Inscritos:</label>
                <input type="text" name="alumnosInscritos" class="mt-1 p-2 border rounded-md w-full" required>
            </div>

            <!-- Agrega más campos según sea necesario -->

            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Guardar
                Clase</button>
        </form>

    </div>

</body>

</html>