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

//$sql = "DELETE FROM `phptrip` WHERE `dest` = 'Russia' LIMIT 13";
$sql = "DELETE FROM `phptrips` WHERE `phptrips`.`S.I NO` = 4";
$result = mysqli_query($conn, $sql);
$aff = mysqli_affected_rows($conn);
echo "<br>Number of affected rows: $aff <br>";
if($result){
    echo var_dump($result) ."deleted sucesfully";
}
else {
    echo " the given task is not deleted  suceesfully upadted";
}
?>