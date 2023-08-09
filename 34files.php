<?php 

// $a=readfile("read.txt");

// echo $a

// readfile("read.txt");
// echo "<br>";
// echo "<br>";
// echo "<br>";

// ?>

// <?php

// $fptr = fopen("read.txt", "r");
// echo var_dump($fptr);

// if(!$fptr){
//     die("Unable to open this file.Please enter a valid filename");
// }

// $content = fread($fptr, filesize("read.txt"));
// fclose($fptr);
// echo $content;




?>
<?php

// $fptr = fopen("myfile.txt", "r");
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr); 
// echo var_dump(fgets($fptr));

/*
// Reading a file line by line
while($a=fgets($fptr)){
    echo $a;
}
echo "End of the file has been reached";
*/

// echo fgetc($fptr); 
/*
// Reading a file character by character
while($a=fgetc($fptr)){
    echo $a;
    // break;
}
echo "End of the file has been reached";
*/
// Write a program which reads the content of a file until . has been encountered
// while($a = fgetc($fptr)){
//     echo $a;
//     if($a == "."){
//         break;
//     }
// }
// fclose($fptr);

?>
<?php

// Writing to a file in php
// echo "Welcome to write files in php";
// $fptr = fopen("files1.txt", "w");
// fwrite($fptr, "This is the best file on this planet. Please dont argue with me on this one.\n"); 
// fwrite($fptr, "This is another content\n"); 
// fwrite($fptr, "This is another content3"); 
// fclose($fptr);


// Appending to a file in php
// $fptr = fopen("files1.txt", "a");
// fwrite($fptr, "This is being appended to the file\n"); 
// fclose($fptr);

?>

