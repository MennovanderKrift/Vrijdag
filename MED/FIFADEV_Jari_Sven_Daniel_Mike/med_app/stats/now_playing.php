<?php

require '../config/connect.php';

$sql = "SELECT wedstrijdnr, slot_1, slot_2, goals_slot_1, goals_slot_2 FROM poulewedstrijden WHERE winnaar = '' AND gelijk = '0' ORDER BY wedstrijdnr ASC LIMIT 1";
$query = mysqli_query($con, $sql);

if ( mysqli_num_rows($query) == 1 ) {
    $row = mysqli_fetch_assoc($query);
    echo '<tr class="now">';
    // echo '<td>' . $row['wedstrijdnr'] . '</td>';
    echo '<td>  ' . $row['slot_1'] . '</td>';
    if ($row['goals_slot_1'] > $row['goals_slot_2']) {
    	echo "<td id='goals_slot_1' class='text-success'>".$row['goals_slot_1']."</td>";
    	echo "<td> - </td>";
    	echo "<td id='goals_slot_2' class='text-danger'>".$row['goals_slot_2']."</td>";
    } elseif ($row['goals_slot_1'] < $row['goals_slot_2']) {
    	echo "<td id='goals_slot_1' class='text-danger'>".$row['goals_slot_1']."</td>";
    	echo "<td> - </td>";
    	echo "<td id='goals_slot_2' class='text-success'>".$row['goals_slot_2']."</td>";
    } else {
    	echo "<td id='goals_slot_1' class='text-warning'>".$row['goals_slot_1']."</td>";
    	echo "<td> - </td>";
    	echo "<td id='goals_slot_2' class='text-warning'>".$row['goals_slot_2']."</td>";
    }
    echo '<td>' . $row['slot_2'] . '</td>';
    echo '</tr>'; 
}  else {
echo 'no rows found...';
}



?>