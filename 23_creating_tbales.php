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


// Create a table in the  db

$sql = "CREATE TABLE `phptrips` 
(`S.I NO`  INT(11) NOT NULL ,
`name` VARCHAR(11) NOT NULL , 
`desti` VARCHAR(11) NOT NULL , 
PRIMARY KEY (`S.I NO`))";

$result = mysqli_query($conn, $sql);
// Check for the table creation success
if ($result) {
    echo "The table was created successfully!<br>";
} else {
    echo "The table was not created successfully because of this error ---> " . mysqli_error($conn);
}
?>