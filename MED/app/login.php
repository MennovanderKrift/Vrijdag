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
<body>
	<div class="container">
		<div class="page-header">
			<h1 class="text-center">Administratie Login</h1>
				<button class="btn btn-default pull-right" id="streaming">naar Livestream</button>
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
			<table class="table table-striped">
				<form method='POST'>
					<td>
						<input type='text' maxlength='25' name='gebruikersnaam' placeholder='Gebruikersnaam' style='width: 100%' required />
					</td>

						<tr />

					<td>
						<input type='password' maxlength='50' name='wachtwoord' placeholder='Wachtwoord' style='width: 100%' required />
					</td>

						<tr />

					<td>
						<input type='submit' max-lenght='50' name='login' value='Login' style='width: 100%' />
					</td>
				</form>
			</table>
		</div>
		
		<?php
			if(isset($_POST['login'])){
				$gebruikersnaam = mysql_real_escape_string($_POST['gebruikersnaam']);
				$wachtwoord = mysql_real_escape_string($_POST['wachtwoord']);

				if(empty($gebruikersnaam) || empty($wachtwoord)){
					echo "Voer een gebruikersnaam en wachtwoord in!";
					die();
				}

			    $query = mysql_query($con , "SELECT * FROM `admins` WHERE `gebruikersnaam` = '".$gebruikersnaam."' AND `wachtwoord` = '".$wachtwoord."'") or die(mysql_error());
			    $row = mysql_num_rows($query) or die(mysql_error());

			    if ($row == 1) {
		            $queryFetch = mysql_fetch_array($query) or die(mysql_error());
		            $_SESSION['username'] = $queryFetch['username'];

		            header('location: index.php');
		        } else {
		            echo '	You are not logged in! Please try again!';
			    } 
			}
		?>
	</div>
		<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
		<script src="js/script.js"></script>
</body>