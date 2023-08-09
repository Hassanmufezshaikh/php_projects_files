<?php

// include '_dbconnect1.php';
require '_dbconnect.php';


$sql = "SELECT * FROM `phptrips`";
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
}['']
?>
