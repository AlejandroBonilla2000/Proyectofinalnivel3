<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Maestros</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <div class="container mx-auto my-8 p-8 bg-white shadow-md rounded-md">

        <h1 class="text-3xl font-bold mb-6 text-gray-800">Lista de Maestros</h1>

        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Nombre</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Dirección</th>
                    <th class="py-2 px-4 border-b">Fecha de Nacimiento</th>
                    <th class="py-2 px-4 border-b">Clase Asignada</th>
                    <!-- Agrega más columnas según sea necesario -->
                    <th class="py-2 px-4 border-b">Acciones</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($maestros as $maestro): ?>
                <tr>
                    <td class="py-2 px-4 border-b"><?php echo $maestro['id']; ?></td>
                    <td class="py-2 px-4 border-b"><?php echo $maestro['Nombre']; ?></td>
                    <td class="py-2 px-4 border-b"><?php echo $maestro['Email']; ?></td>
                    <td class="py-2 px-4 border-b"><?php echo $maestro['Direccion']; ?></td>
                    <td class="py-2 px-4 border-b"><?php echo $maestro['FechaNacimiento']; ?></td>
                    <td class="py-2 px-4 border-b"><?php echo $maestro['ClaseAsignada']; ?></td>
                    <!-- Agrega más columnas según sea necesario -->
                    <td class="py-2 px-4 border-b">
                        <a href="/maestros/edit?id=<?php echo $maestro['id']; ?>"
                            class="text-blue-500 hover:underline mr-2">Editar</a>
                        <form action="/maestros/delete" method="POST" class="inline-block">
                            <input type="hidden" name="id" value="<?php echo $maestro['id']; ?>">
                            <button type="submit" class="text-red-500 hover:underline">Eliminar</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="mt-6">
            <a href="/maestros/create" class="text-green-500 hover:underline">Agregar Nuevo Maestro</a>
        </div>

    </div>

</body>

</html>