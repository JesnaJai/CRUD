<?php
	include 'connection.php';

	$ids = $_POST['warehouse_id'];

	$delete = $connection->query("DELETE FROM employee WHERE id = '$ids'");
?>