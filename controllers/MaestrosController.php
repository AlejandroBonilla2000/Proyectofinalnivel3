<?php
// MaestroController.php

require_once $_SERVER["DOCUMENT_ROOT"] . "/models/Maestro.php";

class MaestroController
{
    protected $model;

    public function __construct()
    {
        $this->model = new MaestroModel();
    }

    public function index()
    {
        // Muestra la lista de maestros
        $maestros = $this->model->all();
        include $_SERVER["DOCUMENT_ROOT"] . "/views/admin/maestros/index.php";
    
    
    }

    public function create()
    {
        // Muestra el formulario para crear un maestro
        include $_SERVER["DOCUMENT_ROOT"] . "/views/admin/maestros/create.php";
    }

    public function store($request)
    {
        // Almacena el nuevo maestro en la base de datos
        $this->model->create($request);
        header("Location: /maestros");
    }

    public function edit($id)
    {
        // Muestra el formulario para editar un maestro
        $maestro = $this->model->find($id);
        include $_SERVER["DOCUMENT_ROOT"] . "/views/admin/maestros/edit.php";
    }

    public function update($request)
    {
        // Actualiza los datos del maestro en la base de datos
        $this->model->update($request);
        header("Location: /maestros");
    }

    public function delete($id)
    {
        // Elimina un maestro de la base de datos
        $this->model->destroy($id);
        header("Location: /maestros");
    }
}