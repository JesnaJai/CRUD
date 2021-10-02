<?php 
	include 'connection.php';

	$ids = $_GET['warehouse_id'];
	$employee_name  = $_POST['employee_name'];
	$designation  = $_POST['designation'];
	$contact  = $_POST['contact'];
    $email  = $_POST['email'];


	// echo "<pre>";
	// print_r($_POST);
	// exit();
	$update = $connection->query("UPDATE employee SET name = '$employee_name', designation='$designation', email='$email', contact='$contact' WHERE id = '$ids'");
	header('location:index.php');
?>