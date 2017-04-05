<?php
	require_once "delete_logic.php";
	include "include/header.php";
?>
	<h1>Delete</h1>
	<p>Are you sure you want to delete:</p>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$schoen['id']?>">
			<label for="name">Schoenmerk:</label>
			<span><?=$schoen['merk']?></span>
		</div>
		<div>
			<label></label>
			<input type="submit" name="confirmed" value="Yes">
			<input type="submit" name="canceled" value="No">
		</div>
	</form>