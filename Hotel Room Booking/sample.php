<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hotel";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM register";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Registered Users:</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Username</th><th>Email</th><th>Password</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["username"] . "</td><td>" . $row["email"] . "</td><td>" . $row["password"] . "</td></tr>";
    }

    echo "</table>";
} else {
    echo "No registered users.";
}

$conn->close();
?>
