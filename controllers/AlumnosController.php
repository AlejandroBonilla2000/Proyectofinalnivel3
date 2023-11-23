<?php
// AlumnoController.php
require_once $_SERVER["DOCUMENT_ROOT"] . "/models/Alumno.php";

class AlumnoController
{
    protected $model;

    public function __construct()
    {
        $this->model = new AlumnoModel();
    }

    public function index()
    {
        $alumnos = $this->model->all();
        include $_SERVER["DOCUMENT_ROOT"] . "/views/admin/alumnos/index.php";
    }

    public function create()
    {
        include $_SERVER["DOCUMENT_ROOT"] . "/views/admin/alumnos/create.php";
    }

    public function store($request)
    {
        $this->model->create($request);
        header("Location: /alumnos");
        exit(); // Importante salir después de una redirección
    }

    public function edit($id)
    {
        $alumno = $this->model->find($id);

        // Validar que el alumno existe antes de mostrar el formulario de edición
        if (!$alumno) {
            // Puedes redirigir a una página de error o realizar alguna otra acción
            echo "Alumno no encontrado.";
            exit();
        }

        include $_SERVER["DOCUMENT_ROOT"] . "/views/admin/alumnos/edit.php";
    }

    public function update($request)
    {
        $this->model->update($request);
        header("Location: /alumnos");
        exit();
    }

    public function delete($id)
    {
        // Validar que se proporcionó un ID antes de intentar eliminar
        if (!isset($id) || empty($id)) {
            echo "ID no válido.";
            exit();
        }
    
        $alumno = $this->model->find($id);
    
        // Validar que el alumno existe antes de intentar eliminarlo
        if ($alumno) {
            $this->model->destroy($id);
        }
    
        header("Location: /alumnos");
        exit();
    }
    
}
?>