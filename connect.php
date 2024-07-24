
<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

$conn = new mysqli($server, $username, $password, $dbname);

if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')";

    if($conn->query($sql) === TRUE) {
        echo " Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
