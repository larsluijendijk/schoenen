<?php
	require_once "index_logic.php";
	require_once "include/header.php";
?>

	<h1>Schoenen</h1>
<p>zoeken:</p>
<form type="POST" action="search.php">
<input type="text" name="search" id="search">
<input type="submit" value="Search" id="submit" name="submit">
</form>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
				<th>Merk</th>
				<th>Maat</th>
				<th>Aantal</th>
			</tr>
		</thead>
		</tbody>
<?php
	foreach($schoenen as $schoen):
?>
			<tr>
				<td><?=$schoen['merk']?></td>
				<td><?=$schoen['maat']?></td>
				<td><?=$schoen['aantal']?></td>
				<td class="center"><a href="edit.php?id=<?=$schoen['id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$schoen['id']?>">delete</a></td>
			    
				
			</tr>

<?php
	endforeach;
?>
		</tbody>
	</table>