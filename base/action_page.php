 <?php
$servername = "localhost";
$username = "maoumaou_noble";
$password = "fnUx-WQ0)K(B";
$dbname = "maoumaou_bestmmo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo $_POST["email"];

$sql = "INSERT INTO Users (`username`, `password`)
VALUES ('".$_POST('email')."', MD5('123'))";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>