<?php
	include "include/db.php";
	require_once "create.action.php";
?>
	<h1>Add</h1>
	<form method="post">
		
		<div>
			<label>Merknaam:</label>
			<input type="text" id="merknaam" name="merknaam">
		</div>
<label>Maat:</label>
<select id="maat" name="maat">
	<?php
		foreach($maten as $maat):
	?>
		<option value="<?=$maat['maat']?>"><?=$maat['maat']?></option>
	<?php
		endforeach;
	?>
</select>
<br/>
	<label>Aantal:</label>
	<select id="aantal" name="aantal">
	<?php
		foreach($aantalen as $aantal):
	?>
		<option value="<?=$aantal['aantal']?>"><?=$aantal['aantal']?></option>
	<?php
		endforeach;
	?>
	</select>
	<br/>
		</div>
			<input type="submit" value="submit">
		</div>
	</form>