<?php
session_start();
echo "Hello PHP!"; echo "<br>";
echo "Hello Program";echo "<br>";

$_SESSION["username"] = "tamim  ";
echo "Welcome " . $_SESSION["username"]; 


if (isset($_SESSION['count'])){
    $_SERVER['count']= 0;
}
$_SESSION['count']++;
echo "এই পেজ আপনি " . $_SESSION['count'] . " বার দেখছেন।";
?>


<!-- Cockies -->

<?php

//Cockes

echo "<hr>";

setcookie('name', 'tamim', time() + 8600);
if(isset($_COOKIE['name'])){
    echo "HI ". $_COOKIE['name'] . "  Welcome to our Site";
}
else {
    echo " Welcome Our Website";
    echo " Welcome Our Website";
}


?>
