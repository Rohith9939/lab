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
    $email = $_POST["email"];
    $pass = $_POST["password"];

    $sql = "INSERT INTO register(username, email, password) VALUES ('$user', '$email', '$pass')";

    if ($conn->query($sql)) {
        echo "Data stored successfully!";
    } else {
        echo "Something went wrong!";
    }

    $conn->close();
}
?>
