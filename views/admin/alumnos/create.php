<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <div class="container mx-auto my-8 p-8 bg-white shadow-md rounded-md">

        <h1 class="text-3xl font-bold mb-6 text-gray-800">Crear Nuevo Alumno</h1>

        <form action="/alumnos/create" method="POST" class="max-w-md mx-auto">

            <div class="mb-4">
                <label for="dni" class="block text-sm font-medium text-gray-600">DNI:</label>
                <input type="text" name="dni" required class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-600">Nombre:</label>
                <input type="text" name="nombre" required class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="correo" class="block text-sm font-medium text-gray-600">Correo:</label>
                <input type="email" name="correo" required class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="direccion" class="block text-sm font-medium text-gray-600">Dirección:</label>
                <input type="text" name="direccion" required class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="fecha_nacimiento" class="block text-sm font-medium text-gray-600">Fecha de
                    Nacimiento:</label>
                <input type="date" name="FechaNacimiento" required class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="maestro_id" class="block text-sm font-medium text-gray-600">ID del Maestro:</label>
                <input type="text" name="MaestroID" required class="mt-1 p-2 w-full border rounded-md">
            </div>

            <!-- Agrega más campos según sea necesario -->

            <div class="flex justify-center">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Guardar Alumno</button>
            </div>

        </form>

    </div>

</body>

</html>