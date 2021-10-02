<?php
	include 'connection.php';
	
	$item = array(
		"name"=>$_POST['name'],
		"designation"=>$_POST['designation'],
		"email"=>$_POST['email'],
		"contact"=>$_POST['contact']
		);
        $warehouse = $connection->query("INSERT INTO `employee`(`name`, `designation`, `email`, `contact`) VALUES ('".$item['name']."', '".$item['designation']."', '".$item['email']."', '".$item['contact']."')");
		echo json_encode($item, true);
	
		
		
	
?>