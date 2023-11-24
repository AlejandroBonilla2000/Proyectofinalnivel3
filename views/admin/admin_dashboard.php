<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="/dist/output.css" rel="stylesheet">
</head>

<body class="font-serif bg-gray-200">

    <div class="container mx-auto my-8 p-8 bg-white shadow-md rounded-md">
        <h1 class="text-3xl font-bold mb-8 text-gray-800">Bienvenido al Dashboard</h1>

        <?php
        // Get the user role from the session
        $rol = isset($_SESSION["usuario_rol"]) ? $_SESSION["usuario_rol"] : null;
        ?>

        <nav class="mb-8">
            <?php if ($rol === 'admin'): ?>
            <h2 class="text-xl font-semibold mb-4 text-indigo-700">Bienvenido, admin</h2>
            <ul class="list-disc pl-6">
                <li><a href="/maestros" class="text-gray-800 hover:text-indigo-700">Maestros</a></li>
                <li><a href="/clases" class="text-gray-800 hover:text-indigo-700">Clases</a></li>
                <li><a href="/alumnos" class="text-gray-800 hover:text-indigo-700">Alumnos</a></li>
            </ul>
            <?php elseif ($rol == 'maestro'): ?>
            <h2 class="text-xl font-semibold mb-4 text-green-700">Bienvenido, maestro</h2>
            <ul class="list-disc pl-6">
                <li><a href="/alumnos" class="text-gray-800 hover:text-green-700">Ver Alumnos</a></li>
            </ul>
            <?php elseif ($rol == 'alumno'): ?>
            <h2 class="text-xl font-semibold mb-4 text-purple-700">Bienvenido, alumno</h2>
            <ul class="list-disc pl-6">
                <li><a href="/maestros" class="text-gray-800 hover:text-purple-700">Ver Maestros</a></li>
                <li><a href="/clases" class="text-gray-800 hover:text-purple-700">Ver Clases</a></li>
            </ul>
            <?php endif; ?>
        </nav>
        <div class="text-right">
            <a href="/logout" class="text-red-500 hover:text-red-700">Cerrar Sesión</a>
        </div>

    </div>

</body>

</html>