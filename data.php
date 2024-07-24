
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
    $username = $_POST['uname'];
    $password = $_POST['pass'];

    $sql = "INSERT INTO users (username, password) VALUES ('$uname', '$pass')";

    if($conn->query($sql) === TRUE) {
        echo " Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
