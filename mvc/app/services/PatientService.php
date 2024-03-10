<?php
require_once APP_ROOT.'/app/models/Patient.php';

class PatientService
{
    public function getALlPatients()
    {
// buoc 1: ket noi database
        try{
            $conn=new PDO('mysql:host=localhost;dbname=hms','root','');
            // buoc 2: truy van du lieu
            $sql="SELECT * FROM patients ORDER BY id DESC ";
            $stmt=$conn->query($sql);
            // buoc 3: xu li ket qua:
            $patients=[];
            while($row=$stmt->fetch()){
                // laasy dooi tuong tu trong database
                $patient=new Patient($row['id'],$row['fullname'],$row['gender'],$row['dateOfBirth'],$row['mobile']);
                // them doi tuong vao mang
                $patients[]=$patient;
            }
            return $patients;
        }catch (PDOException $e){
            return $patients=[];
        }
    }
}
?>