<?php
	require_once "edit_logic.php";
	include "include/header.php";
?>
	<h1>Edit merk</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$schoen['id']?>">
			<label for="name">merk:</label>
			<input type="text" id="merk" name="merk" value="<?=$schoen['merk']?>">
		</div>
		<div>
			<label for="name">maat:</label>
			<input type="text" id="maat" name="maat" value="<?=$schoen['maat']?>">
		</div>
		<div>
			<label for="name">aantal:</label>
			<input type="text" id="aantal" name="aantal" value="<?=$schoen['aantal']?>">
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>