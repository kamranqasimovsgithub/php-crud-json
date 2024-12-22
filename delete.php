<?php
	$delete_id = $_GET['delete_id'];
 
	$data = file_get_contents('users.json');
	$data = json_decode($data, true);
 
	unset($data[$delete_id]);


  $data = array_values($data);
 
	//encode back to json
	$data = json_encode($data, JSON_PRETTY_PRINT);
	file_put_contents('users.json', $data);
 
	header('location: index.php');	
?>