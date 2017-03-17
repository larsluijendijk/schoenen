<?php
	include "include/header.php";
	include "include/db.php";
?>
	<h1>Schoenen Merken</h1>
	<p class="merken"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
				<th>Merknaam:</th>
				<th>Maten</th>
				<th>Aantal</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		</tbody>
<?php
	foreach($shoes as $shoe):
		foreach ($maten as $maat){
		
		}

?>
			<tr>
				<td><?=$shoe['merknaam']?></td>
				<td>
				<?php
				$querys = 'SELECT * FROM maten WHERE id = '.$shoe['id_maten'].'';
				$result = mysqli_query($db, $querys);
					while ($row = mysqli_fetch_assoc($result)){
						$desc[] = $row["maat"];
					}
				foreach ($desc as $des){
    			echo $des;
 				}
				?></td>
				<td>
				<?php
				$querys2 = 'SELECT * FROM aantal WHERE id = '.$maat['id_aantal'].'';
				$result2 = mysqli_query($db, $querys2);
				while ($row2 = mysqli_fetch_assoc($result2)){
					$desc2[] = $row2["aantal"];
				}
				
				foreach ($desc2 as $des2)
				{
    			echo $des2; 
    			}
    			?>
    			<?php	
    			unset($desc);  
    			unset($desc2);  
				?></td>
	<td><a href="edit.php?id=<?=$shoe['id']?>">edit</a></td>
	<td><a href="delete.php?id=<?=$shoe['id']?>">delete</a></td>
<?php
	endforeach;
?>	
	</tbody>
	</table>
	
<?php
	include "include/footer.php";
?>

