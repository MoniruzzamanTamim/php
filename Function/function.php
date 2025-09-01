


<?php

// function FunctionName ( Argument ){
    #Functional Operation 
//};

// Normal Function ...
function func() {
    $var = 25; // ✅ global scope থেকে $var1 আনলো
    $result = $var ** 2;
    echo $result;
};
func() ;echo "<hr>";
$var1 = 10;
function exponension() {
    global $var1; // ✅ global scope থেকে $var1 আনলো
    $result = $var1 ** 2;
    echo $result;
}
exponension();
echo "<hr>";

// Perameterize Function   
function func2($value, $value2) {
      $result = $value+$value2;
      echo $result;
      return $result;
};
func2(100,90);
echo "<hr>";



// Default Perameter ...

function default_vallue($value1, $value2 = "Tamim "){
    echo $value1;
    echo $value2;
};
default_vallue("Moniruzzaman ");

echo "<hr>";
?>

