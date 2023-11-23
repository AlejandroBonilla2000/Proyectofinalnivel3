<?php
// index.php

require_once __DIR__ . "/controllers/MaestrosController.php";
require_once __DIR__ . "/controllers/ClasesController.php";
require_once __DIR__ . "/controllers/AlumnosController.php";
require_once __DIR__ . "/controllers/HomeController.php";
require_once __DIR__ . "/controllers/UsuarioController.php";
require_once __DIR__ . "/models/UsuarioModel.php";

$homeController = new HomeController();
$maestroController = new MaestroController();
$claseController = new ClaseController();
$alumnoController = new AlumnoController();
$usuarioController = new UsuarioController();

// Dividimos la ruta por el signo "?" para no leer los query params. Ejem: /maestros?id=1
$route = explode("?", $_SERVER["REQUEST_URI"]);

$method = $_SERVER["REQUEST_METHOD"];

session_start(); // Inicia la sesión al principio del script

// Verifica si el usuario ha iniciado sesión
if (empty($_SESSION["usuario_id"]) && $route[0] !== '/login') {
    // Si no ha iniciado sesión y la ruta no es /login, redirige al formulario de inicio de sesión
    header("Location: /login");
    exit();
}

if ($method === "POST") {
    switch ($route[0]) {
        case '/maestros/delete':
            $maestroController->delete($_POST["id"]);
            break;

        case '/maestros/create':
            $maestroController->store($_POST);
            break;

        case '/maestros/update':
            $maestroController->update($_POST);
            break;

        case '/clases/delete':
            $claseController->delete($_POST["id"]);
            break;

        case '/clases/create':
            $claseController->store($_POST);
            break;

        case '/clases/update':
            $claseController->update($_POST);
            break;

        case '/alumnos/delete':
            $alumnoController->delete($_POST["id"]);
            break;

        case '/alumnos/create':
            $alumnoController->store($_POST);
            break;

        case '/alumnos/update':
            $alumnoController->update($_POST);
            break;

        // Nuevas rutas
        case '/clase/delete':
            $claseController->delete($_POST["id"]);
            break;

        case '/maestro/delete':
            $maestroController->delete($_POST["id"]);
            break;

        case '/login': 
            $usuarioController->login();
            break;

        case '/logout': 
            $usuarioController->logout();
            break;

        default:
            echo "NO ENCONTRAMOS LA RUTA.";
            break;
    }
}

if ($method === "GET") {
    switch ($route[0]) {
        case '/index.php':
            $usuarioController->loginForm();
            break;

        case '/maestros':
            $maestroController->index();
            break;

        case '/maestros/edit':
            $maestroController->edit($_GET["id"]);
            break;

        case '/maestros/create':
            $maestroController->create();
            break;

        case '/clases':
            $claseController->index();
            break;

        case '/clases/edit':
            $claseController->edit($_GET["id"]);
            break;

        case '/clases/create':
            $claseController->create();
            break;

        case '/alumnos':
            $alumnoController->index();
            break;

        case '/alumnos/edit':
            $alumnoController->edit($_GET["id"]);
            break;

        case '/alumnos/create':
            $alumnoController->create();
            break;

        case '/home': 
            $homeController->index();
            break;

        case '/logout': 
            $usuarioController->logout();
            break;

        default:
            echo "NO ENCONTRAMOS LA RUTA.";
            break;
    }
}
?>