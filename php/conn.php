<?php 

	try
	{
		$conn = new pdo('mysql:host=localhost;dbname=intelcost_bienes','root','');
	}
	catch (Exception $e)
	{
		die('ERROR: '.$e.getMessage());
	}

?>	