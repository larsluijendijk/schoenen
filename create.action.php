<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','schoenenmerken');
		// Prepare data for insertion
		$merk = $db->escape_string($_POST["merk"]);
		$maat = $db->escape_string($_POST["maat"]);
		$aantal = $db->escape_string($_POST["aantal"]);
		// Prepare query and execute
		$query = "insert into schoen (merk, maat, aantal) values ('$merk','$maat','$aantal')";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");	
    exit();
	endif;

?>