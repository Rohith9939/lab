<?php
if ($_POST) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "hotel";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        echo "Connection Error";
    }

    $user = $_POST["username"];
    $pass = $_POST["password"];

    $sql = "SELECT * FROM register WHERE username='$user' AND password='$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        header("Location: home.html");
        exit();
    } else {
        echo "Invalid username or password";
    }

    $conn->close();
}
?>
