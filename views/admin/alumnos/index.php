<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alumnos</title>
    <link href="/dist/output.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <div class="container mx-auto my-8 p-8 bg-white shadow-md rounded-md">

        <h1 class="text-3xl font-bold mb-6 text-gray-800">Lista de Alumnos</h1>

        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">DNI</th>
                    <th class="py-2 px-4 border-b">Nombre</th>
                    <th class="py-2 px-4 border-b">Correo</th>
                    <th class="py-2 px-4 border-b">Dirección</th>
                    <th class="py-2 px-4 border-b">Fecha de Nacimiento</th>
                    <th class="py-2 px-4 border-b">Maestro Asignado</th>
                    <!-- Agrega más columnas según sea necesario -->
                    <th class="py-2 px-4 border-b">Acciones</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($alumnos as $alumno): ?>
                <tr>
                    <td class="py-2 px-4 border-b"><?php echo $alumno['id']; ?></td>
                    <td class="py-2 px-4 border-b"><?php echo $alumno['DNI']; ?></td>
                    <td class="py-2 px-4 border-b"><?php echo $alumno['Nombre']; ?></td>
                    <td class="py-2 px-4 border-b"><?php echo $alumno['Correo']; ?></td>
                    <td class="py-2 px-4 border-b"><?php echo $alumno['Direccion']; ?></td>
                    <td class="py-2 px-4 border-b"><?php echo $alumno['FechaNacimiento']; ?></td>
                    <td class="py-2 px-4 border-b"><?php echo $alumno['MaestroID']; ?></td>
                    <!-- Agrega más columnas según sea necesario -->
                    <td class="py-2 px-4 border-b">
                        <a href="/alumnos/edit?id=<?php echo $alumno['id']; ?>"
                            class="text-blue-500 hover:underline mr-2"><img src="/assets/lapiz.svg" alt="Editar"
                                class="icono-lapiz text-yellow-500"></a>
                        <form action="/alumnos/delete" method="POST" class="inline-block">
                            <input type="hidden" name="id" value="<?php echo $alumno['id']; ?>">
                            <button type="submit" class="text-red-500 hover:underline"><img src="/assets/delete.svg"
                                    alt="Eliminar" class="icono-lapiz text-red-500"></button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="mt-6">
            <a href="/alumnos/create" class="text-green-500 hover:underline">Agregar Nuevo Alumno</a>
        </div>

    </div>

</body>

</html>