<?php
// HomeController.php
class HomeController
{
    public function index()
    {
        include $_SERVER["DOCUMENT_ROOT"] . "/views/admin/admin_dashboard.php";
    }
}