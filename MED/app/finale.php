<!doctype html>
<?php
include_once 'config/connect.php';
$sql = "SELECT naam FROM teams WHERE poule = 'A' ORDER BY totaal_punten DESC LIMIT 0,2 AND
SELECT naam FROM teams WHERE poule = 'B' ORDER BY totaal_punten DESC LIMIT 0,2";
 ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Finale</title>
	<link rel="stylesheet" href="http://bootswatch.com/simplex/bootstrap.min.css">
</head>
	<body style="background: #333;">
    <a href="livestream.html"><button class="btn btn-default pull-right" id="streaming" style="margin-right: 5%">naar Livestream</button></a>
      <a href="selectwedstrijd.php"><button class="btn btn-success pull-right" id="streaming" style="margin-right: 2%">terug naar Wedstrijden</button></a>
		<header>
			<center><h1 style="color: #fff; font-size: 40px; margin-left: 350px;">Finale plaatsen</h1></center>
      <br>
		</header>
		
<div style="margin-left:20px; margin-right: 20px;"class="panel panel-info">
  <div class="panel-heading">
    <center><h3 style="font-size: 23px;" class="panel-title">Halve Finale</h3></center>
  </div>
  <div style="margin-left: 30px; margin-right: 30px; margin-top: 10px;" class="panel-body">
    <table class="table table-striped table-hover ">
    <tr class="info">
      <td><h4>1</h4></td>
      <td><h4><?php 
	  $query = mysqli_query($con, "SELECT naam FROM teams WHERE poule='A' ORDER BY totaal_punten DESC LIMIT 0,1");
		while ($row = mysqli_fetch_assoc($query))
		{
			echo '<tr>';
			echo '<td>' . $row['naam'] . '</td>';
			echo '</tr>';
		}?>
	</h4></td>
      <td><h4>VS</h4></td>
      <td><h4><?php
      $query = mysqli_query($con, "SELECT naam FROM teams WHERE poule='B' ORDER BY totaal_punten DESC LIMIT 0,1");
		while ($row = mysqli_fetch_assoc($query))
		{
			echo '<tr>';
			echo '<td>' . $row['naam'] . '</td>';
			echo '</tr>';
		}?></h4></td>
    </tr>
        <tr class="info">
      <td><h4>2</h4></td>
      <td><h4><?php
      $query = mysqli_query($con, "SELECT naam FROM teams WHERE poule='A' ORDER BY totaal_punten DESC LIMIT 1,1");
		while ($row = mysqli_fetch_assoc($query))
		{
			echo '<tr>';
			echo '<td>' . $row['naam'] . '</td>';
			echo '</tr>';
		}?></h4></td>
      <td><h4>VS</h4></td>
      <td><h4><?php
      $query = mysqli_query($con, "SELECT naam FROM teams WHERE poule='B' ORDER BY totaal_punten DESC LIMIT 1,1");
		while ($row = mysqli_fetch_assoc($query))
		{
			echo '<tr>';
			echo '<td>' . $row['naam'] . '</td>';
			echo '</tr>';
		}?></h4></td>
    </tr>
  </table>
  </div>
</div>

<div style="margin-left:20px; margin-right: 20px;" class="panel panel-success">
  <div class="panel-heading">
    <center><h3 style="font-size: 23px;"class="panel-title">De Finale!</h3></center>
  </div>
  <div style="margin-left: 30px; margin-right: 30px; margin-top: 10px;" class="panel-body">
    <table class="table table-striped table-hover ">
    <tr class="danger">
      <td><h4>1</h4></td>
      <td><h4>Winnaar halvefinale wedstrijd 1</h4></td>
      <td><h4>VS</h4></td>
      <td><h4>Winnaar halvefinale wedstrijd 2</h4></td>
    </tr>
  </table>
  </div>
</div>	
	<footer>
	
	</footer>
	</body>
	</html>
