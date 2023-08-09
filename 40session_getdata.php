<?php

echo "Welcome to the world of cookies<br>";
// Syntax to set a cookie
// echo time();
// setcookie("category", "Books", time() + 86400, "/"); 
// echo "The cookie is set<br>";
session_start();
echo 'welcome'. $_SESSION['$username'];

echo '<br> your fav categoty is'. $_SESSION['$favcat'];
echo '<br>';

?>