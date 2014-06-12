<?php  
	require 'config/connect.php';
	
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>
			Teams
		</title>
	<link rel="stylesheet" href="http://bootswatch.com/simplex/bootstrap.min.css">
</head>

<body style="background: #333;">
	<div class="container">
		<div class="page-header">
			<h1 class="text-center" style='color: #fff'>Selecteer wedstrijd Poule-fase</h1>
		</div>
		<div class="row">
			<?php  
				$sql = "SELECT * FROM `teams` ORDER BY `id`";
				
				if (!$query = mysqli_query($con, $sql)) {
					echo 'Kan de teams niet tonen';
					exit();
				}
			?>

			<a href='location:javascript://history.go(-1)'>
				Ga terug
			</a>

			<table class="table table-striped">
				<thead>
					<tr>
						<th style="color: #009cff">Teamnaam</th>
						<th style="color: #009cff">Gewonnen</th>
						<th style="color: #009cff">Verloren</th>
						<th style="color: #009cff">Gelijk</th>
						<th style="color: #009cff">Poule</th>
						<th style="color: #009cff">Punten</th>
					</tr>
				</thead>
				
				<tbody style='background: #fff'>
					<?php  
					while ($row = mysqli_fetch_assoc($query) )
					{
						if(empty($row['verloren'])){
							$verloren = '0';
						} else {
							$verloren = $row['verloren'];
						}

						echo '<tr>';
						echo '<td><a href="displayTeam.php?id='.$row['id'].'" style="color: #F50">'.$row['naam'].'</a></td>';
						echo '<td><a href="displayTeam.php?id='.$row['id'].'" style="color: #F50">'.$row['gewonnen'].'</a></td>';
						echo '<td><a href="displayTeam.php?id='.$row['id'].'" style="color: #F50">'.$verloren.'</a></td>';
						echo '<td><a href="displayTeam.php?id='.$row['id'].'" style="color: #F50">'.$row['gelijk'].'</a></td>';
						echo '<td><a href="displayTeam.php?id='.$row['id'].'" style="color: #F50">'.$row['poule'].'</a></td>';
						echo '<td><a href="displayTeam.php?id='.$row['id'].'" style="color: #F50">'.$row['totaal_punten'].'</a></td>';
						echo '</tr>'; 
					}
					?>
				</tbody>
			</table>
		</div>
		
	</div>
		<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
		<script src="js/script.js"></script>
</body>