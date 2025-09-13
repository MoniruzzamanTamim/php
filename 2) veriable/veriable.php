<?php


$name = "Tamim";
$name ="iqbal";
echo " Veriable Value Changeable : \t" .$name ; echo "<br>";


// Constants 

//OLD System Define Constanse.....
// define(VeriableName, Veriable)
echo "<hr>";
echo "Constanse............."; echo "<br>";
define("rool",25);
echo "But Constanse Value Fixed Not Changeable  : \t ". rool ; echo "<br>";
const name = "Tamim";
echo "But Constanse Value Fixed Not Changeable  : \t " . name;

?>
<!-- Constanse Veriable  -->


<!-- SuperGlobal veriable -->
<!-- single_page.php -->
<form method="get">
    <input type="text" name="name" placeholder="Your Name"><br><br>
    <input type="number" name="number" placeholder="Your Number"><br><br>
    <input type="submit" value="Show">
</form>

<?php
if (isset($_GET['name']) && isset($_GET['number'])) {
    echo "<hr>";
    echo "Name: " . htmlspecialchars($_GET['name']) . "<br>";
    echo "Number: " . htmlspecialchars($_GET['number']) . "<br>";
}
?>
