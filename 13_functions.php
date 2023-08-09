<?php
echo "Welcome to php tutorial on functions <br>";

function processMarks($marksArr){   
    $sum = 0;
    foreach ($marksArr as $value) {
        $sum += $value;  //  $sum += $value;  means $sum = $sum + $value;.
    }
    return $sum;
}

function avgMarks($marksArr){
    $sum = 0;
    $i = 1;
    foreach ($marksArr as $value) {
        $sum += $value;
        $i++;
    }
    return $sum/$i;
}
function calculatePercentage($totalStudents, $passedStudents) {
    if ($totalStudents > 0) {
        $percentage = ($passedStudents / $totalStudents) * 100;
        return $percentage;
    } else {
        return 0; // To handle the case where there are no students
    }
}

$rohanDas = [34, 98, 45, 12, 98, 93]; 

$sumMarks = processMarks($rohanDas); // $sumMarks = processMarks($rohanDas);


$harry = [99, 98, 93, 94, 17, 100];
// $sumMarksHarry = processMarks($harry);
$sumMarksHarry = processMarks($harry);
echo "Total marks scored by Rohan out of 600 is $sumMarks <br>";
echo "Total marks scored by Harry out of 600 is $sumMarksHarry";
echo "<br>";
?>

<br>
when there is a similarity in objects like placing orders do payments <br>
filling same application form of any instition or train so do not want it to  copy paste it evry time <br>
instead i want to wrap in a single fuctions and call it whenever i want it.<br>
these make my work easier as developer.. <br>
<br>
example:- consider i have a class and in there are 100 students if some students <br>
        want to known there percentage avrage marks so do not want it to for  single person <br>
         so it want create a function run for everyone..<br>

how function works is however will line 2 will excute, then it will igrone function <br>
bcz it is defining the function not calling it so it will go directly go to the where the function is called <br>
at line 26 

