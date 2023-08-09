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

$sql = "SELECT * FROM `phptrips` WHERE `desti`='sirsi'";
$result = mysqli_query($conn, $sql);

// usage of where caluse to fetch data.
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the DataBase<br>";

// Display the rows returned by the sql query
if($num> 0){
    $no = 1;
    // We can fetch in a better way using the while loop
    while($row = mysqli_fetch_assoc($result)){
       // echo var_dump($row);
        echo "<br>";
        echo $no .  ". Hello ". $row['name'] ." Welcome to ". $row['desti'];
        $no += 1; //$no = $no+ 1;
       echo "<br>";
    }
}
// usage of where caluse to upate data.
echo "<br>";

$sql = "UPDATE `phptrips` SET `name` = 'rohan1' WHERE `phptrips`.`S.I NO` = 8";
$result = mysqli_query($conn, $sql);

if($result){
    echo var_dump($result);
}
else {
    echo " the given task is not suceesfully upadted";
}
?>
