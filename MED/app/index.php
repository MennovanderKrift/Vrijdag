<?php
	require 'inc/connect.php';

	error_reporting(0);
?>

<!doctype html>
<html lang='en' />
<head>
	<script src="inc/jquery-1.11.0.js" type="text/javascript"></script>
	<link rel='stylesheet' href='inc/style.css' type='text/css' />
	<link rel="icon" href="inc/img/icon.gif" type="image/gif" />
	<link rel="stylesheet" href="http://bootswatch.com/simplex/bootstrap.min.css">
	<meta charset="UTF-8">
	<title>Voetbaltoernooi AMO1</title>
</head>
<body style="background: #333; color: #fff; padding: 0px; margin: 0px">
	<div class="container" style='margin: 2% 5%; width: 90%'>
		<div class='page-header'>
			<h1 class="text-center" style='color: #fff'>Live stream voetbaltoernooi AMO1</h1>
		</div>

		<div class='row'>
			<table class="table table-striped">
				<thead>
					<tr>
						<th style='color: #009cff'>pagina</th>
						<th style='color: #009cff'>config</th>
					</tr>
				</thead>

				<tbody style='background: #fff'>
					<tr>
						<td><a href="selectWedstrijd.php">Score toevoegen</a></td>
						<td style='color: red'><?php echo $_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]; ?>selectWedstrijd.php</td>
					</tr>

					<tr>
						<td><a href="livestream.html">Live stream kijken</a></td>
						<td style='color: red'><?php echo $_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]; ?>livestream.html</td>
					</tr>

					<tr>
						<td><a href="teamsWeergeven.php">Teams weergeven</a></td>
						<td style='color: red'><?php echo $_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]; ?>teamsWeergeven.php</td>
					</tr>

					<tr>
						<td><a href="finale.html">Finale plaatsen</a></td>
						<td style='color: red'><?php echo $_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]; ?>finale.html</td>
					</tr>
				</tbody>
			</table>
		</div>

	<div class='footer'></div>
	</div><!-- Container End -->
</body>
</html>