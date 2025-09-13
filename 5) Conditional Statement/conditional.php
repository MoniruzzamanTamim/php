








<?php

// <!-- IF Statement  -->

$age = 25;
if($age == 25){
    echo "Your Age Is Aligible to Vote.... <br>";
};

// IF .. ELSE Statement .........................
if($age >=18 ){
    echo "Your Age Is Aligible to Vote.... <br>";
}else{
 echo " Your Age no Aligible to Vote.............<br>";
};




// <!-- Grading System.................... -->
$marks = 85;
if ($marks >=33 AND $marks <40){
    echo "GRADE: D"; echo "<br>";
}elseif($marks >=40 AND $marks <50){
    echo "GRADE: C"; echo "<br>";
}elseif($marks >=50 AND $marks <60){
    echo "GRADE: B"; echo "<br>";

}elseif($marks >=60 AND $marks <70){
    echo "GRADE: A-"; echo "<br>";
}elseif($marks >=70 AND $marks <80){
    echo "GRADE: A"; echo "<br>";

}elseif($marks >=80 AND $marks <=100){
    echo "GRADE: A+"; echo "<br>";
}else{
    echo "GRADE FAIL"; echo "<br>";
}

echo "<br>";




// <!-- Switch Case  --> 

$marks = 50;

switch (true) {
    case ($marks >= 33 && $marks < 40):
        echo "GRADE: D<br>";
        break;
    case ($marks >= 40 && $marks < 50):
        echo "GRADE: C<br>";
        break;
    case ($marks >= 50 && $marks < 60):
        echo "GRADE: B<br>";
        break;
    case ($marks >= 60 && $marks < 70):
        echo "GRADE: A-<br>";
        break;
    case ($marks >= 70 && $marks < 80):
        echo "GRADE: A<br>";
        break;
    case ($marks >= 80 && $marks <= 100):
        echo "GRADE: A+<br>";
        break;
    default:
        echo "GRADE: FAIL<br>";
}


$day = "Monday";

switch ($day) {
    case "Saturday":
        echo "আজকে ছুটির দিন!";
        break;
    case "Sunday":
        echo "আজকে সপ্তাহের প্রথম কর্মদিবস!";
        break;
    case "Monday":
        echo "আজকে সোমবার!";
        break;
    case "Tuesday":
        echo "আজকে মঙ্গলবার!";
        break;
    default:
        echo "ভুল দিন দিয়েছেন!";
}

echo "<br>";

// Ternary Operator 
$x = 10;
$result = ($x % 2 == 0) ? "Even" : "Odd";
echo $result;  

?>


