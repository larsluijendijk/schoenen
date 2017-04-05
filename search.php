<?php
require_once "index_logic.php";
require_once "include/header.php";

if (isset($_GET['search'])){
			// Get Patient for id
			$db = new mysqli('localhost','root','','schoenenmerken');
			$search = $_GET['search'];
			$variable = $db->escape_string($search);
			$query = "SELECT * FROM schoen WHERE merk like '%{$variable}%'";
			$result = $db->query($query);
		
			$help = $result->fetch_assoc();	
		}
		else{
			die("ummh, durp! 404 ofzo?");
		}
		?>
		<h1>Zoek resultaat : <?php echo $variable ?></h1>
			<table>
		<thead>
			<tr>
				<th>Merk</th>
				<th>Maat</th>
				<th>Aantal</th>
			</tr>
		</thead>
		</tbody>
			<tr>

			<?php foreach($result as $rows): ?>
				<td><?=$rows['merk']?></td>
				<td><?=$rows['maat']?></td>
				<td><?=$rows['aantal']?></td>
			<?php endforeach; ?>
			</tr>
		</tbody>
	</table>
	<p><a href="index.php"> Back </a> </p>