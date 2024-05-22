<!DOCTYPE html>
<html>
<body>


<?php
$servername = "127.0.0.1";
$username = "aashi";
$password = "Daisy15gatsby27!";
$dbname = "testDB";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// $sql = "SELECT uid FROM student";
// $result = $conn->query($sql);

// echo $result->num_rows."students in the student table";
echo "hello world";


$conn->close();
?>

</body>
</html>
