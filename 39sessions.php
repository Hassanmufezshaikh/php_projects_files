<?php
echo "Welcome to the world of cookies<br>";
// Syntax to set a cookie
// echo time();
// setcookie("category", "Books", time() + 86400, "/"); 
// echo "The cookie is set<br>";
session_start();
$_SESSION['$username'] = 'Mufez';
$_SESSION['$favcat'] = 'books';
?>


<?php
// echo "Welcome to the world of cookies<br>";

// Cookies | Sessions

// Syntax to set a cookie
// echo time();
// setcookie("category", "Books", time() + 86400, "/"); 
// echo "The cookie is set<br>";

?>

<?php

// $cat = $_COOKIE['category'];
// echo "Here is the list of all $cat";


?>
