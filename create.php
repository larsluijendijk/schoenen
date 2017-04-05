<?php
	require_once "create.action.php";
?>
	<h1>Add</h1>
	<form method="post">
		
		<div>
			<label>Merknaam:</label>
			<input type="text" id="merk" name="merk">
		<br/>
		</div>
		<div>
			<label>Maat:</label>
			<input type="text" id="maat" name="maat">
		<br/>
		</div>
		<div>
			<label>Aantal:</label>
			<input type="text" id="aantal" name="aantal">
		<br/>
		</div>
			<input type="submit" value="submit">
		</div>
	</form>