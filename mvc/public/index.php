<?php
require_once ("../app/config/config.php");
require_once APP_ROOT.'/app/controllers/HomeController.php';
$homeController=new HomeController();
$homeController->index();
$patientService=new PatientService();
$patients= $patientService->getAllPatients();
echo"<pre>";
print_r($patients);
echo"<pre>";