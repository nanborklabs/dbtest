<?php
$servername = "35.184.184.37";
$username = "root";
$password = "GGdk5isPqPgPspyq";
$dbname = "booksdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM books";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["PID"]. " - Name: ". $row["PNAME"]. "Author: ".$row["AUTHOR"]. "<br>";
	echo "<br> Published by: ".$row["PUBLISHER"]. "Stock available: ".$row["QUANTITY"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 