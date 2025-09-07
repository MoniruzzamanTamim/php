
<?php

echo "Date & Time Section ....... <br>";
date_default_timezone_set("Asia/Dhaka"); // বাংলাদেশ সময় সেট করলাম

echo "বর্তমান সময়: " . date("Y-m-d H:i:s");
$dateTime = date("h H i s g G a A e I O T c");
echo $dateTime;

?>


<?php
echo "<hr>"; 
echo "<hr>"; 
// ৭ দিন পর্যন্ত মেয়াদী কুকি সেট করা
setcookie("user", "Rahim", time() + 7*24*60*60);  
setcookie("name", "TAMIM", time() + 8600);
// কুকি পড়া
if(isset($_COOKIE["user"])) {
    echo "Welcome back, " . $_COOKIE["user"];
} else {
    echo "Welcome new visitor!";
}
if(isset($_COOKIE["name"])) {
    echo "Welcome back, " . $_COOKIE["name"];
} else {
    echo "Welcome new visitor!";
}
echo "<hr>"; 
echo "<hr>"; 
?>

<?php
session_start();
$_SESSION['username'] = "Rahim";
$_SESSION['password'] = "TAMIMJUTR";
echo "Welcome, " . $_SESSION['username'] . "    " . $_SESSION['password'];
?>



<?php
session_start();

if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}
$_SESSION['count']++;

echo "এই পেজ আপনি " . $_SESSION['count'] . " বার দেখছেন।";
?>
