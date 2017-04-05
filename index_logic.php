<?php
	
	$db = new mysqli('localhost','root','','schoenenmerken');

	$query = "select * from schoen";
	$result = $db->query($query);
	
	$schoenen = $result->fetch_all(MYSQLI_ASSOC);
?>