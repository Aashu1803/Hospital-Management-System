<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "hcc"; 

// Creating a connection
$conn = new mysqli($servername, $username, $password, $database);

// Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query the database
$sql = "SELECT * FROM your_table"; // Replace with your table name
$result = $conn->query($sql);

// Process the query result
if ($resuinglt->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . "<br>";
    }
} else {
    echo "No results found";
}

// Closing the connection
$conn->close();
?>
