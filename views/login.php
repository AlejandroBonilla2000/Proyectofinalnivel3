<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-md max-w-md w-full">
        <div class="text-center mb-6">
            <img src="../assets/logo.jpg" alt="Logo" class="w-24 mx-auto mb-4 rounded-full">
            <h2 class="text-2xl font-semibold">Iniciar sesión</h2>
        </div>
        <form action="/login" method="post">
            <div class="mb-4">
                <label for="correo" class="block text-gray-600">Correo:</label>
                <input type="text" id="correo" name="correo" required
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="contrasena" class="block text-gray-600">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" required
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <button type="submit"
                class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue">
                Iniciar sesión
            </button>
        </form>
    </div>
</body>

</html>