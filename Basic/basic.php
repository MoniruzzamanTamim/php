
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

 