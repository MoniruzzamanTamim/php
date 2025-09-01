
<?php

#BackSlash || \\ 
$name = "H\"I <br>";
Echo $name;
$name = 'H\'I <br> ';
Echo $name;
$details = " Hello This IS a Page One \nThis is Page Two \nThis IS a Page 3  <br> This Is Page No 4";
Echo $details;
$tabLine = " Hello Space \t Use TAB <br>";
Echo "<pre>$tabLine</pre>";
$link = "C:\\Users\\Tamim <br>";
Echo $link;
# Line Coninue ...
$number = 10+20+20
            +25+87;
Echo "Total Number:  $number <br> ";


// Concation 

$str1 = 'Hello';
$str2 = 'World';
$result = $str1 . ' ' . $str2;
echo "$result <br>"; // Output: Hello World



// Double-quoted string interpolation 
$name = "tamim";
$age = 25;
$city = "Dhaka";
$number1 = 25;
$number2 = 25;
Echo "Hi, My Name is $name || My Age is $age || And My City is $city <br> ";
echo "Number 1 = $number1 AND Number 2 = $number2 || Equal IS = " . ($number1 + $number2) . "<br>";

// User-Input
// echo "Please Type Your Name: ";
// $name = trim(fgets(STDIN));
// echo "Welcome $name to PHP";



// Spread Operator  
// Array Concation .............
$array = [10,25,12];
$array2= [20,50,24];
$array3 = [...$array,...$array2];
print_r( $array3);
echo " <br> " ;


#Multiple Argument And One Perameter .....
function addNumbers(...$number){
    $total = array_sum($number);
    return $total;
};
echo addNumbers(10,25,10,14,10);
echo "<br>";

// Dummy Veriable 

for ($_ = 10; $_ <20; $_ ++ ){
    echo "Hello Dummy Veriable... <br>";
};


// Veriable 
$veriable = "Veriable: ";
echo $veriable;
$name = "Tamim";
$age = 25;
$height = 5.9;
$t= True;
$n = null;
$array = [10,25,12,16,10];

echo $name;   // Tamim 
echo $age;    // 25
echo $height; // 5.9

// Data Type Check 

echo gettype($name); echo "<br>";
echo gettype($age); echo "<br>";
echo gettype($height); echo "<br>";
echo gettype($t); echo "<br>";
echo gettype($n); echo "<br>";
echo gettype($array); echo "<br>";
echo var_dump($array); echo "<br>";



// String Data Type : 
$value = "   hello            word   "; echo "<br>";
echo $value; echo "<br>";
echo trim($value); echo "<br>";
echo strtoupper($value); echo "<br>";
echo strtolower($value); echo "<br>";
echo strlen($value); echo "<br>";
echo str_replace("PHP", "word", $value); echo "<br>";
$value = "apple,banana,mango";
$convertArray = explode(",", $value);
// Array দেখতে হলে:
print_r($convertArray); echo "<br>";
echo strpos($value, "or"); echo "<br>";


?>


<!-- Type Conversion  -->
<h1>Type Conversion </h1> <br>
 <?php 

// প্রাথমিক ভেরিয়েবল গুলো
$int_var = 42;                 // Integer
$float_var = 3.1416;           // Float
$string_var1 = "123abc";       // স্ট্রিং শুরুতে সংখ্যা
$string_var2 = "abc123";       // স্ট্রিং শুরুতে অক্ষর
$bool_var_true = true;         // Boolean true
$bool_var_false = false;       // Boolean false
$null_var = NULL;              // Null
$array_var = [1, 2, 3];        // Array

// কনভার্সন দেখানো হচ্ছে
echo "<h3>Type Conversion Demonstration</h3>";

// Integer রূপান্তর
echo "<strong>(int) Conversion:</strong><br>";
var_dump((int)$int_var); echo "<br>";         // int(42)
var_dump((int)$float_var); echo "<br>";       // int(3)
var_dump((int)$string_var1); echo "<br>";     // int(123)
var_dump((int)$string_var2); echo "<br>";     // int(0)
var_dump((int)$bool_var_true); echo "<br>";   // int(1)
var_dump((int)$bool_var_false); echo "<br>";  // int(0)
var_dump((int)$null_var); echo "<br>";        // int(0)
// var_dump((int)$array_var); echo "<br>";    // Error: Array to integer conversion

echo "<hr>";

// Float রূপান্তর
echo "<strong>(float) Conversion:</strong><br>";
var_dump((float)$int_var); echo "<br>";       // float(42)
var_dump((float)$string_var1); echo "<br>";   // float(123)
var_dump((float)$string_var2); echo "<br>";   // float(0)
var_dump((float)$bool_var_true); echo "<br>"; // float(1)
var_dump((float)$null_var); echo "<br>";      // float(0)

echo "<hr>";

// String রূপান্তর
echo "<strong>(string) Conversion:</strong><br>";
var_dump((string)$int_var); echo "<br>";      // string(2) "42"
var_dump((string)$float_var); echo "<br>";    // string(6) "3.1416"
var_dump((string)$bool_var_true); echo "<br>"; // string(1) "1"
var_dump((string)$bool_var_false); echo "<br>"; // string(0) ""
var_dump((string)$null_var); echo "<br>";     // string(0) ""
var_dump((string)123); echo "<br>";           // string(3) "123"

echo "<hr>";

// Boolean রূপান্তর
echo "<strong>(bool) Conversion:</strong><br>";
var_dump((bool)0); echo "<br>";               // false
var_dump((bool)1); echo "<br>";               // true
var_dump((bool)""); echo "<br>";              // false
var_dump((bool)"0"); echo "<br>";             // false
var_dump((bool)"false"); echo "<br>";         // true
var_dump((bool)array()); echo "<br>";         // false
var_dump((bool)[0]); echo "<br>";             // true

echo "<hr>";

// Array রূপান্তর
echo "<strong>(array) Conversion:</strong><br>";
var_dump((array)$int_var); echo "<br>";       // array(1) { [0]=> int(42) }
var_dump((array)$string_var1); echo "<br>";   // array(1) { [0]=> string(6) "123abc" }
var_dump((array)$null_var); echo "<br>";      // array(0) { }

?>


