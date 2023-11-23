<?php
// UsuarioController.php
class UsuarioController
{
    protected $model;

    public function __construct()
    {
        $this->model = new UsuarioModel();
    }

    public function loginForm()
    {
        // Mostrar formulario de inicio de sesión
        include $_SERVER["DOCUMENT_ROOT"] . "/views/login.php";
    }

    public function login()
    {
        // Lógica para manejar el inicio de sesión
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $correo = isset($_POST["correo"]) ? htmlspecialchars($_POST["correo"]) : '';
            $contrasena = isset($_POST["contrasena"]) ? htmlspecialchars($_POST["contrasena"]) : '';

            // Validar el formulario (agrega tu lógica de validación aquí, por ejemplo, longitud de contraseña, caracteres permitidos, etc.)

            // Validar el correo y la contraseña (debes implementar la validación real)
            $usuario = $this->model->getByCorreo($correo);

            if ($usuario && password_verify($contrasena, $usuario["contrasena"])) {
                // Iniciar sesión (puedes utilizar sesiones PHP nativas o un sistema de autenticación más avanzado)
                session_start();
                $_SESSION["usuario_id"] = $usuario["id"];
                $_SESSION["usuario_nombre"] = $usuario["nombre"];
                $_SESSION["usuario_rol"] = $usuario["rol"];

                // Redireccionar según el rol
                $this->redirectByRole($usuario["rol"]);
                exit();
            } else {
                // Mostrar mensaje de error o redireccionar a la página de inicio de sesión con un mensaje de error
                echo "Credenciales incorrectas";
            }
        } else {
            // Mostrar formulario de inicio de sesión
            include $_SERVER["DOCUMENT_ROOT"] . "/views/login.php";
        }
    }

    public function logout()
    {
        // Cerrar sesión
        session_start();
        session_unset();
        session_destroy();

        
        header("Location: /login");
        exit();
    }

    // Redirecciona según el rol del usuario
    private function redirectByRole($rol)
    {
        switch ($rol) {
            case 'admin':
                header("Location: /home");
                break;
            case 'maestro':
                header("Location: /home");
                break;
            case 'alumno':
                header("Location: /home");
                break;
            default:
                header("Location: /login");
        }

        exit(); 
    }
}
?>