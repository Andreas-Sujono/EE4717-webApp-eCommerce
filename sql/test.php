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
$query3 = "INSERT INTO `CustomerDetails` (accountId, fullName, email, phoneNumber, dateOfBirth)
VALUES ( 1, 'test, 'test', 'test' , '2020-10-01' )";

$query = "INSERT INTO CustomerDetails (accountId, fullName, email, phoneNumber, dateOfBirth)
VALUES ( 1, 'test', 'test@gmail.com', 'test', '2020-10-01');";

$result = $conn->query($query3);

mysqli_close($conn);
?>
