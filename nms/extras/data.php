<?php
// this file will fetch data from out database 'mychartjs'
// it will fetch the score from the table by using the player id
// and also this will output the result in to a json file format


// setting header to json
header('Content-Type: application/json');

// database
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'mychartjs');

// get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli) {
	die("Connection failed: " . $mysqli->error);
}

// query to get data from the table
$query = sprintf("SELECT playerid, score FROM scoreboard ORDER BY playerid");

// execute querry
$result = $mysqli->query($query);

// loop through the returned data
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

// free memory associated with result
$result->close();

// close connection
$mysqli->close();

// now print the data in json format
print json_encode($data);

?>