<?php  
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbharry";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection was successful<br>";
}
echo "<br>";
// we can also insert values using variables 

$name = "hegda";
$desti = "sirsi";
// sql query to be excuted

$sql = "INSERT INTO `phptrips` (`S.I NO`, `name`, `desti`) VALUES ('5', '$name', '$desti');";
$result = mysqli_query($conn, $sql);
// Check for the table creation success
if ($result) {
    echo "The record query was successfully! updated<br>";
} else {
    echo "The record query was  NOT successfully! updated because of this error ---> " . mysqli_error($conn);
}
?>