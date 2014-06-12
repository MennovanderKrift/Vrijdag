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
				$teamId = $_GET['id'];

				$sql = "SELECT * FROM `spelers` WHERE `team_id` = '".$teamId."' ORDER BY `voornaam`";
				
				if (!$query = mysqli_query($con, $sql)) {
					echo 'Kan de teams niet tonen';
					exit();
				}
			?>

			<a href='teamsWeergeven.php'>
				Ga terug
			</a>

			<table class="table table-striped">
				<thead>
					<tr>
						<th style='color: #009cff'>Voornaam</th>
						<th style='color: #009cff'>Tussenvoegsel</th>
						<th style='color: #009cff'>Achternaam</th>
						<th style='color: #009cff'>Klas</th>
						<th style='color: #009cff'>Score</th>
						<th style='color: #009cff'>Team</th>
					</tr>
				</thead>
				
				<tbody style='background: #fff'>
					<?php  
					while ($row = mysqli_fetch_assoc($query) )
					{
						if(empty($row['tussenvoegsel'])){
							$tussenvoegsel = '-';
						} else {
							$tussenvoegsel = $row['tussenvoegsel'];
						}


						if(empty($row['doelpunten'])){
							$score = 'geen';
						} else {
							$score = $row['doelpunten'];
						}


						$teamName = mysqli_query($con, "SELECT * FROM `teams` WHERE `id` = '".$teamId."'") or die(mysql_error());

						if($teamName = mysqli_fetch_assoc($teamName)) {
							$teamName = $teamName['naam'];
						}


						echo '<tr style="color: #F50">';
						echo '<td>'.$row['voornaam'].'</td>';
						echo '<td>'.$tussenvoegsel.'</td>';
						echo '<td>'.$row['achternaam'].'</td>';
						echo '<td>'.$row['klas'].'</td>';
						echo '<td>'.$score.'</td>';
						echo '<td>'.$teamName.'</td>';
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