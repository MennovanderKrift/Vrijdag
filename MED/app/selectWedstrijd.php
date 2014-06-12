<?php  
	require 'config/connect.php';
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select Wedstrijd</title>
	<link rel="stylesheet" href="http://bootswatch.com/simplex/bootstrap.min.css">
</head>
<body style='background: #333'>
	<div class="container">
		<div class="page-header">
			<h1 class="text-center" style='color: #fff'>Selecteer wedstrijd Poule-fase</h1>
			<button class="btn btn-danger" id="reset">reset alle data <span class="glyphicon glyphicon-exclamation-sign"></span></button>
			<button class="btn btn-default pull-right" id="streaming">naar Livestream</button>
			<a href="finale.html"><button class="btn btn-success pull-right" id="streaming" style="margin-right: 33%">naar Finale plaatsen</button></a>
			<p>
			<?php  
				if ( isset($_GET['msg']) )
				{
					echo $_GET['msg'];
				}
			?>
			</p>
		</div>
		<div class="row">
			<?php
				if(empty($_GET['order'])){
					$order = 'wedstrijdnr';
				} else {
					$order = $_GET['order'];
				}

				$sql = "SELECT * FROM `poulewedstrijden` ORDER BY `".$order."`";
				
				if ( !$query = mysqli_query($con, $sql) ) 
				{
					echo 'Kan de wedstrijden niet tonen';
					exit();
				}
			?>

			<table class="table table-striped">
				<thead>
					<tr>
						<th>
							<a href='?order=wedstrijdnr' style="color: #009cff">
								Orderen bij wedstrijdnummer
							</a>
						</th>

						<th>
							<a href='?order=slot_1' style="color: #009cff">
								Orderen bij slot 1
							</a>
						</th>

						<th>
						</th>

						<th>
							<a href='?order=slot_2' style="color: #009cff">
								Orderen bij slot 2
							</a>
						</th>
					</tr>
				</thead>
			</table>

			<table class="table table-striped">
				<thead>
					<tr>
						<th style="color: #009cff">Wedstrijdnummer</th>
						<th style="color: #009cff">Slot 1</th>
						<th style="color: #009cff"></th>
						<th style="color: #009cff">Slot 2</th>
					</tr>
				</thead>

				<tbody style='background: #fff'>
					<?php  
						while ($row = mysqli_fetch_assoc($query)) {
							echo '<tr>';
							echo '<td><a href="addscore.php?id=' . $row['wedstrijdnr'] . '">' . $row['wedstrijdnr'] . '</a></td>';
							echo '<td><a href="addscore.php?id=' . $row['wedstrijdnr'] . '">' . $row['slot_1'] . '</a></td>';
							echo '<td><a href="addscore.php?id=' . $row['wedstrijdnr'] . '"> - </a></td>';
							echo '<td><a href="addscore.php?id=' . $row['wedstrijdnr'] . '">' . $row['slot_2'] . '</a></td>';
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