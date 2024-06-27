<?php
$servername = "db"; // This is the service name defined in docker-compose.yml
$username = "root";
$password = "admin";
$dbname = "php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, age FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>PHP MySQL</h1>";
    echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Age</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["age"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
