<?php 

include "db.php";
$ids = $_GET['warehouse_id'];

$name  = $_POST['name'];
$Designation  = $_POST['Designation'];

$contact  = $_POST['contact'];
$email  = $_POST['email'];
           
    $view= $connection->query("SELECT * FROM employee set name = '$employee_name', designation='$Designation', email='$email', contact='$contact' WHERE id = '$ids'");
    
    echo json_encode($item, true);
       

                
?>



