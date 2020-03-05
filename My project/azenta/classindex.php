<?php
// Include the connection file

include('includes/connect_to_db.php');

//Create a connection instance
$mysqli = connectToDb();

//Create a query
$query = "SELECT * FROM b1_games_leagues";

//Excute the query
$results = $mysqli -> query($query);

//Assign records to a variable 
$data = $results -> fetch_array(MYSQLI_BOTH);

print_r($data)
?>