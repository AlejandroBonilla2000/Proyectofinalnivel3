<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Maestro</title>
    <link href="/dist/output.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <div class="container mx-auto my-8 p-8 bg-white shadow-md rounded-md">

        <h1 class="text-3xl font-bold mb-6 text-gray-800">Crear Nuevo Maestro</h1>
        <a href="/maestros"
            class="inline-block bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded-md transition-colors duration-300">Back</a>
        <form action="/maestros/create" method="POST" class="space-y-4">
            <!-- Agrega los campos necesarios para crear un maestro -->
            <div>
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre:</label>
                <input type="text" name="nombre" class="mt-1 p-2 w-full border rounded-md" required>
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                <input type="email" name="email" class="mt-1 p-2 w-full border rounded-md" required>
            </div>

            <div>
                <label for="direccion" class="block text-sm font-medium text-gray-700">Dirección:</label>
                <input type="text" name="direccion" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div>
                <label for="FechaNacimiento" class="block text-sm font-medium text-gray-700">Fecha de
                    Nacimiento:</label>
                <input type="date" name="FechaNacimiento" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div>
                <label for="ClaseAsignada" class="block text-sm font-medium text-gray-700">Clase Asignada:</label>
                <input type="text" name="ClaseAsignada" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <!-- Agrega más campos según sea necesario -->

            <button type="submit"
                class="bg-green-500 text-white py-2 px-4 rounded-md hover:bg-green-600 focus:outline-none focus:shadow-outline-green active:bg-green-800">
                Guardar Maestro
            </button>
        </form>

    </div>

</body>

</html>