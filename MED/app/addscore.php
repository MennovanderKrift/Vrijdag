<?php

require 'config/connect.php';
require 'functions.php';

error_reporting(0);

function nowPlaying($con) {
	$id = stripslashes($_GET['id']);

	$sql = "SELECT * FROM poulewedstrijden WHERE wedstrijdnr = '$id'";
	$query = mysqli_query($con, $sql);
	
	
	if ( !mysqli_num_rows($query) == 1 ) {
		echo 'Selecteer a.u.b. een wedstrijd';
	}

	$row = mysqli_fetch_assoc($query);

	mysqli_free_result($query);
	return $row['slot_1'] . ' VS ' . $row['slot_2'];	
}

function getPlayers($con) {
	$id = stripslashes($_GET['id']);

	$sql = "SELECT spelers.id, spelers.voornaam, spelers.tussenvoegsel, spelers.achternaam, teams.naam FROM spelers INNER JOIN teams ON spelers.team_id = teams.id WHERE poulewedstrijden.id = '$id'";
	$query = mysqli_query($con, $sql);
		
	
	if ( !mysqli_num_rows($query) ) {
		echo 'Geen spelers gevonden';
	}

	while($row = mysqli_fetch_assoc($query) ) {
		echo $row['spelers.voornaam'];
	}

	mysqli_free_result($query);
	
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add score</title>
    <link rel="stylesheet" href="http://bootswatch.com/simplex/bootstrap.min.css">
    <style>
		.labelMedium {
			font-size: 2.5em;
		}

		.labelBig {
			font-size: 4em;
			width: 300px;
			vertical-align: top;
		}

		.inputBig {
			box-sizing: border-box;
			height: 100px;
			width: 100px;
			font-size: 4em;
			text-align: center;
			border: 3px solid white;
			box-shadow: inset 0 0 8px rgba(0,0,0,0.1), 0 0 16px rgba(0,0,0,0.1);						
			background: rgba(255,255,255,0.8);
		}
		


    </style>
</head>

<body style='background: #333; color: #fff'>
<div class="container">
	<div class="page-header">
		<h1 style="color: #009cff">Score toevoegen</h1>
		<h2 class="text-center"> <?php echo nowPlaying($con); ?> </h2>
		<a href="selectwedstrijd.php"><button class="btn btn-default">Wedstrijd selecteren</button></a>
	</div>
	

	<?php 
		$id = stripslashes($_GET['id']);
		$sql2 = "SELECT * FROM poulewedstrijden WHERE wedstrijdnr = '$id'";
		$query = mysqli_query($con, $sql2);
		$row = mysqli_fetch_assoc($query);
	?>

	<?php
		if(!empty($id)) {
			echo '	<div class="score col-md-8">
					    <form role="form" action="__addScore.php?id='.$id.'" METHOD="POST">
							<legend style="color: #009cff">Eindscore</legend>
							<div class="form-group">
						        <label class="labelBig" for="score1"  id="score1">'.$row['slot_1'].'</label>
						    	<input type="number" name="score1" min="0" max="100" id="score1" class="inputBig" value="0" style="color: #009cff">
							</div>
							
							<div class="form-group">
						    	<label class="labelBig" for="score2" id="score2" name="score2">'.$row['slot_2'].'</label>
						    	<input type="number" name="score2" min="0" max="100" id="score2" class="inputBig" value="0" style="color: #009cff">
							</div>
							
							<input type="submit" name="update" value="update score" class="btn btn-default">
							
							<div class="form-group">
						    	<label class="labelMedium" for="winnaar" id="winnaar">winnaar</label>
								'.$row['slot_1'].'<input class="inputMedium" type="radio" name="winnaar" min="0" id="winnaar" value="'.$row['slot_1'].'">
								'.$row['slot_2'].'<input class="inputMedium" type="radio" name="winnaar" id="winnaar" value="'.$row['slot_2'].'">
							
							</div>
							
							<div class="form-group">
						    	<label class="labelMedium" for="gelijk" id="gelijk">gelijk</label>
						    	<input type="checkbox" name="gelijk" id="gelijk">	
							</div>

					    	<input type="hidden" name="addScore" value="addscore">
							<input type="submit" name="submit" value="Score vastleggen" class="btn btn-default">
					    </form>    
				    </div>';
		}
    ?>

  	<div class="col-md-4">
  		<h2>Nu speelt:</h2>
                <table class="table">
                    <tbody class="nowplaying">
                    
                    </tbody>
                </table>
  	</div>
</div>

	<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>