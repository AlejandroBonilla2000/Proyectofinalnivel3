<?php
// Obtener el rol de la sesión
$rol = isset($_SESSION["usuario_rol"]) ? $_SESSION["usuario_rol"] : null;

// Obtener el nombre de la sesión
$nombre = isset($_SESSION["usuario_nombre"]) ? $_SESSION["usuario_nombre"] : null;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Universitario</title>
    <link href="../../dist/output.css" rel="stylesheet">
</head>

<body class="font-sans bg-gray-200">

    <!-- Menú lateral -->
    <div class="flex h-screen bg-gray-200">
        <div class="flex-shrink-0 w-64 bg-blue-800">
            <div class="flex-shrink-0 flex items-center justify-center">
                <h1 class="text-2xl font-semibold text-white">Universidad</h1>
            </div>
            <nav class="flex-grow mt-4">
                <?php if ($rol === 'admin'): ?>
                <div class="text-white px-4 py-2 mb-2">
                    <span class="block font-bold"><?php echo $rol; ?></span>
                    <span class="block text-gray-400"><?php echo $nombre; ?></span>
                </div>
                <a href="/maestros" class="block py-2 px-4 text-sm text-white hover:bg-blue-600">Maestros</a>
                <a href="/clases" class="block py-2 px-4 text-sm text-white hover:bg-blue-600">Clases</a>
                <a href="/alumnos" class="block py-2 px-4 text-sm text-white hover:bg-blue-600">Alumnos</a>
                <?php elseif ($rol == 'maestro'): ?>
                <div class="text-white px-4 py-2 mb-2">
                    <span class="block font-bold"><?php echo $rol; ?></span>

                </div>
                <a href="/alumnos" class="block py-2 px-4 text-sm text-white hover:bg-blue-600">Ver Alumnos</a>
                <?php elseif ($rol == 'alumno'): ?>
                <div class="text-white px-4 py-2 mb-2">
                    <span class="block font-bold"><?php echo $rol; ?></span>

                </div>
                <a href="/maestros" class="block py-2 px-4 text-sm text-white hover:bg-blue-600">Ver Maestros</a>
                <a href="/clases" class="block py-2 px-4 text-sm text-white hover:bg-blue-600">Ver Clases</a>
                <?php endif; ?>
                <a href="/logout" class="block py-2 px-4 text-sm text-white hover:bg-red-600">Cerrar Sesión</a>
            </nav>
        </div>

        <!-- Contenido principal -->
        <div class="flex-1 overflow-x-hidden overflow-y-auto p-6">
            <div class="flex justify-between">
                <h1 class="text-2xl font-semibold text-gray-900">Inicio</h1>
            </div>

            <!-- Tarjetas de Resumen -->
            <div class="mt-4 flex flex-wrap -mx-6">
                <!-- Tarjeta de Estudiantes -->
                <div class="w-full md:w-1/2 xl:w-1/3 px-6 mb-4">
                    <div class="bg-white rounded-lg shadow-md p-4">
                        <h2 class="text-xl font-semibold text-gray-800">Estudiantes</h2>
                        <p class="text-gray-600 mt-2">Total: 49</p>
                    </div>
                </div>

                <!-- Tarjeta de Cursos -->
                <div class="w-full md:w-1/2 xl:w-1/3 px-6 mb-4">
                    <div class="bg-white rounded-lg shadow-md p-4">
                        <h2 class="text-xl font-semibold text-gray-800">Cursos</h2>
                        <p class="text-gray-600 mt-2">Total: 10</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>