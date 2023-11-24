<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Maestro</title>
    <link href="/dist/output.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <div class="container mx-auto my-8 p-8 bg-white shadow-md rounded-md">

        <h1 class="text-3xl font-bold mb-6 text-gray-800">Editar Maestro</h1>

        <form action="/maestros/update" method="POST" class="space-y-4">
            <!-- Agrega los campos necesarios para editar un maestro -->
            <div>
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre:</label>
                <input type="text" name="nombre" value="<?php echo $maestro['Nombre']; ?>"
                    class="mt-1 p-2 w-full border rounded-md" required>
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                <input type="email" name="email" value="<?php echo $maestro['Email']; ?>"
                    class="mt-1 p-2 w-full border rounded-md" required>
            </div>

            <div>
                <label for="direccion" class="block text-sm font-medium text-gray-700">Dirección:</label>
                <input type="text" name="direccion" value="<?php echo $maestro['Direccion']; ?>"
                    class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div>
                <label for="FechaNacimiento" class="block text-sm font-medium text-gray-700">Fecha de
                    Nacimiento:</label>
                <input type="date" name="FechaNacimiento" value="<?php echo $maestro['FechaNacimiento']; ?>"
                    class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div>
                <label for="ClaseAsignada" class="block text-sm font-medium text-gray-700">Clase Asignada:</label>
                <input type="text" name="ClaseAsignada" value="<?php echo $maestro['ClaseAsignada']; ?>"
                    class="mt-1 p-2 w-full border rounded-md">
            </div>

            <!-- Agrega más campos según sea necesario -->

            <input type="hidden" name="id" value="<?php echo $maestro['id']; ?>">

            <button type="submit"
                class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                Actualizar Maestro
            </button>
        </form>

    </div>

</body>

</html>