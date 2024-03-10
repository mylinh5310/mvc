<?php
define('APP_ROOT', dirname(__FILE__, 3));
require_once APP_ROOT. '/app/services/PatientService.php';

class HomeController
{
    public function index()
    {
        //Goi DL tu PatientService
        $patientService = new PatientService();
        $patients = $patientService->getAllPatients();
        //Render DL  duoc lay ra HomePage
        include APP_ROOT. '/app/views/home/index.php';
    }
}
?>