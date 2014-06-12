<?php 
require '../config/connect.php';

$sql = "SELECT * FROM spelers ORDER BY doelpunten DESC LIMIT 5";
$query = mysqli_query($con, $sql);

echo '<h2>Topscorers</h2>';

if (mysqli_num_rows($query) == 1) {
	if($row = mysqli_fetch_assoc($query)) {
	    echo '<h3>' . $row['voornaam'] . ' ' . $row['tussenvoegsel'] . ' ' . $row['achternaam'];
	    echo '<span class="badge">' . $row['doelpunten'] . '</span></h3>'; 
	}
}

mysqli_close($con);

?>
