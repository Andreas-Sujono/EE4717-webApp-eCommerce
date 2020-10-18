<?php
$servername = "localhost";
$username = "f32ee";
$password = "f32ee";
$dbname = "f32ee";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

/* comment necessary code below if you have run this cript before */
$sql = "SELECT * FROM `Product` WHERE category='laptop';";
$result = $conn->query($sql);
echo $result->num_rows;

for ($i=0; $i <$result->num_rows; $i++) {
    $row = $result->fetch_assoc();
    echo $row;
 }
mysqli_close($conn);
?>
