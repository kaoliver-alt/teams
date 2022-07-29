<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "basketball";

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br>";

// Establish query
$sql = "SELECT,
FROM
ORDER BY ";

//USE teams;

$sql = "SELECT *
FROM teams
WHERE name = 'Lakers'
ORDER BY city";


// Query: What's the name of the team in Brooklyn?
/* $sql = "SELECT name FROM teams WHERE city = 'Brooklyn'";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "name: " . $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}*/


// Query: What are the cities and states of teams in the NBA?
/* $sql = "SELECT name, city, state FROM teams WHERE league='NBA'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "name: " . $row["name"]. " - teams: " . $row["city"]. " " . $row["state"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();*/

?>