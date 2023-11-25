<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clases</title>
    <link href="/dist/output.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <div class="container mx-auto my-8 p-8 bg-white shadow-md rounded-md">

        <h1 class="text-3xl font-bold mb-6 text-gray-800">Lista de Clases</h1>
        <a href="/home"
            class="inline-block bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded-md transition-colors duration-300">Back</a>

        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Nombre de la Clase</th>
                    <th class="py-2 px-4 border-b">Maestro Asignado</th>
                    <th class="py-2 px-4 border-b">Alumnos Inscritos</th>
                    <!-- Agrega más columnas según sea necesario -->
                    <th class="py-2 px-4 border-b">Acciones</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($clases as $clase): ?>
                <tr>
                    <td class="py-2 px-4 border-b"><?php echo $clase['id']; ?></td>
                    <td class="py-2 px-4 border-b"><?php echo $clase['NombreClase']; ?></td>
                    <td class="py-2 px-4 border-b"><?php echo $clase['MaestroID']; ?></td>
                    <td class="py-2 px-4 border-b"><?php echo $clase['AlumnosInscritos']; ?></td>
                    <!-- Agrega más columnas según sea necesario -->
                    <td class="py-2 px-4 border-b">
                        <a href="/clases/edit?id=<?php echo $clase['id']; ?>"
                            class="text-blue-500 hover:underline mr-2"><img src="/assets/lapiz.svg" alt="Editar"
                                class="icono-lapiz text-yellow-500"></a>
                        <form action="/clases/delete" method="POST" class="inline-block">
                            <input type="hidden" name="id" value="<?php echo $clase['id']; ?>">
                            <button type="submit" class="text-red-500 hover:underline"><img src="/assets/delete.svg"
                                    alt="Eliminar" class="icono-lapiz text-red-500"></button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="mt-6">
            <a href="/clases/create" class="text-green-500 hover:underline">Agregar Nueva Clase</a>
        </div>

    </div>

</body>

</html>