<h1>Hello World!</h1>
<h4>Connecting to mysql database...</h4>

<?php
$host = 'mysql';
$user = 'root';
$pass = 'password';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected to MySQL."
?>