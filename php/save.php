<?php 

	require('conn.php');

	$sql = 'INSERT INTO saved_data VALUES(:id)';

	$stm = $conn->prepare($sql);
	$stm->execute(array(':id' => $_POST['id']));

	header('location: ../index.html');




?>