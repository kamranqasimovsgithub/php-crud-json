<?php

if(isset($_POST['duplicate_many'])){
	$dublicate_id = $_GET['dublicate_id'];
 
	
 
	
    $dublicateNumber = $_POST['dublicate_num'];

    for($i=0; $i<$dublicateNumber; $i++){
        $data = file_get_contents('users.json');
	    $data = json_decode($data, true);
        $data[] = $data[$dublicate_id];

        $data = array_values($data);

        $data = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents('users.json', $data);
    }

    

	header('location: index.php');
}
	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD Operation using JSON File in PHP</title>
</head>
<body>

<h1>
            How many times do you want dublicate?
</h1>

<form method="post" name="frmUpdate">
    
<input type="number" name="dublicate_num" >
<input type="submit" name="duplicate_many" value="Duplicate_many" >

        
</form>
</body>
</html>

