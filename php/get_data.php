<?php 

	require('conn.php');

	$sql = 'SELECT * FROM saved_data';

	$stm = $conn->prepare($sql);
	$stm -> execute();
	$response = $stm->fetchAll();

	echo json_encode($response);


?>