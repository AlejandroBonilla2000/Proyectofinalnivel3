<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Clase</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <div class="container mx-auto my-8 p-8 bg-white shadow-md rounded-md">

        <h1 class="text-3xl font-bold mb-6 text-gray-800">Editar Clase</h1>

        <form action="/clases/update" method="POST" class="max-w-md mx-auto">
            <!-- Agrega los campos necesarios para editar una clase -->
            <div class="mb-4">
                <label for="nombreClase" class="block text-sm font-medium text-gray-700">Nombre de la Clase:</label>
                <input type="text" name="nombreClase" value="<?php echo $clase['NombreClase']; ?>"
                    class="mt-1 p-2 border rounded-md w-full" required>
            </div>

            <div class="mb-4">
                <label for="maestroID" class="block text-sm font-medium text-gray-700">Maestro Asignado:</label>
                <input type="text" name="maestroID" value="<?php echo $clase['MaestroID']; ?>"
                    class="mt-1 p-2 border rounded-md w-full" required>
            </div>

            <div class="mb-4">
                <label for="alumnosInscritos" class="block text-sm font-medium text-gray-700">Alumnos Inscritos:</label>
                <input type="text" name="alumnosInscritos" value="<?php echo $clase['AlumnosInscritos']; ?>"
                    class="mt-1 p-2 border rounded-md w-full" required>
            </div>

            <!-- Agrega más campos según sea necesario -->

            <input type="hidden" name="id" value="<?php echo $clase['id']; ?>">

            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Actualizar Clase</button>
        </form>

    </div>

</body>

</html>