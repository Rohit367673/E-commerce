<?php
// Establish a connection to your MySQL database
$servername = "localhost";
$username = "your_db_username";
$password = "your_db_password";
$dbname = "your_db_name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the search query from the frontend
$searchQuery = $_GET['query'];

// Perform a simple search query on the 'products' table
$sql = "SELECT * FROM products WHERE name LIKE '%$searchQuery%'";
$result = $conn->query($sql);

$searchResults = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $searchResults[] = $row;
    }
}

// Return the results as JSON
header('Content-Type: application/json');
echo json_encode($searchResults);

$conn->close();
?>
