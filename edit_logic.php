<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$schoen = NULL;
		if (isset($_GET['id'])):
			// Get Patient for id
			$db = new mysqli('localhost','root','','schoenenmerken');
			$id = $db->escape_string($_GET["id"]);
			
			$query = "select * from schoen where id=$id";
			$result = $db->query($query);
		
			$schoen = $result->fetch_assoc();		
		endif;
		if ($schoen == NULL):
			// No patient found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
		elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','schoenenmerken');
		
		// Prepare data for update
		$id = $db->escape_string($_POST["id"]);
		$merk = $db->escape_string($_POST["merk"]);
		$maat = $db->escape_string($_POST["maat"]);
		$aantal = $db->escape_string($_POST["aantal"]);

		// Prepare query and execute
		$query = "update schoen set merk='$merk', maat='$maat', aantal='$aantal' where id=$id";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>