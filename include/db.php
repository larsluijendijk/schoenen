<?php
	$db = new mysqli('localhost','root','','schoenenmerken');

	$query = "select * from schoenmerken";
	$result = $db->query($query);
	
	$shoes = $result->fetch_all(MYSQLI_ASSOC);

	$query2 = "select * from maten";
	$result2 = $db->query($query2);

	$maten = $result2->fetch_all(MYSQLI_ASSOC);

	$query3 = "select * from aantal";
	$result3 = $db->query($query3);

	$aantalen = $result3->fetch_all(MYSQLI_ASSOC);


?>