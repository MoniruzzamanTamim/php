<!-- Arithmetic Operator  -->




<?php
#Arithmetic Operator
$a = 20;
$b = 10;
echo "Addition: "   .($a + $b). "<br>"; // Addition
echo "Subtraction: " .($a - $b). "<br>"; 
echo "Multiplication: ".($a * $b). "<br>";
echo "Division: "     .($a / $b). "<br>";
echo "Modulus: "      .($a % $b). "<br>";
echo "Exponentiation:  ".($a ** $b). "<br>";
echo  "Increment:  " .($a ++); echo "<br>";  // Increment  
echo "Decrement:  " .($a --); echo "<br>";  // Decrement
echo "Pre-Increment:  " .(++$a); echo "<br>";  // Pre-Increment
echo "Pre-Decrement:  " .(--$a); echo "<br>";  // Pre-Decrement   


echo "<br>";

#Assignment Operator
$x = 10;
echo " Equal: " .$x; echo "<br>";
$x += 5;  // $x = $x + 5
echo "After Addition & Equal: " .$x; echo "<br>";
$x -= 5;  // $x = $x - 5
echo "After Subtraction & Equal: " .$x; echo "<br>";
$x *= 5;  // $x = $x * 5
echo "After Multiplication & Equal: " .$x; echo "<br>";
$x /= 5;  // $x = $x / 5
echo "After Division & Equal: " .$x; echo "<br>";
$x %= 5;  // $x = $x % 5
echo "After Modulus & Equal: " .$x; echo "<br>";    
$x **= 5;  // $x = $x ** 5
echo "After Exponentiation & Equal: " .$x; echo "<br>"; 
echo "<br>";


#comparison Operator
$number1 = 20;
$number2 = 10;  

if ($number1 == $number2){
    echo "Equal Is True <br>";
}else{
    echo "Equal Is False <br>"; 
};
if ($number1 === $number2){
    echo "Identical Is True <br>";
}else{
    echo "Identical Is False <br>"; 
};
if ($number1 != $number2){
    echo "Not Equal Is True <br>";
}else{
    echo "Not Equal Is False <br>"; 
};
if ($number1 !== $number2){
    echo "Not Identical Is True <br>";
}else{  
    echo "Not Identical Is False <br>"; 
};
if ($number1 > $number2){
    echo "Greater Than Is True <br>";       
}else{  
    echo "Greater Than Is False <br>"; 
};  
if ($number1 < $number2){
    echo "Less Than Is True <br>";  
}else{  
    echo "Less Than Is False <br>";
};
if ($number1 >= $number2){
    echo "Greater Than Or Equal Is True <br>";
}else{
    echo "Greater Than Or Equal Is False <br>"; 
};
if ($number1 <= $number2){
    echo "Less Than Or Equal Is True <br>";
}else{  
    echo "Less Than Or Equal Is False <br>"; 
};
echo "<br>";    
#Logical Operator
$number1 = 20;
$number2 = 10;  
if ($number1 == 20 AND $number2 == 10){
    echo "AND Is True <br>";
}else{  
    echo "AND Is False <br>"; 
};  
if ($number1 == 20 && $number2 == 10){
    echo "&& Is True <br>";
}else{      
    echo "&& Is False <br>"; 
};
if ($number1 == 20 OR $number2 == 5){
    echo "OR Is True <br>"; 
}else{
    echo "OR Is False <br>"; 
};  
if ($number1 == 20 || $number2 == 5){
    echo "|| Is True <br>"; 
}else{  
    echo "|| Is False <br>"; 
};  
if (!($number1 == 5)){
    echo "NOT Is True <br>";    
}else{
    echo "NOT Is False <br>"; 
};  
echo "<br>";
#String Operator    
$str1 = "Hello ";   
$str2 = "World";
$str1 .= $str2;  // $str1 = $str1 . $str    
echo $str1; echo "<br>";
echo "<br>";    


#Bitwise Operator
$a = 5;  // 0101
$b = 3;  // 0011

echo "AND == & : " . ($a & $b) . "<br>";  // 0001 = 1 
echo  " OR == | : " . ($a | $b) . "<br>";  // 0111 = 7
echo "XOR == ^ : " . ($a ^ $b) . "<br>"; // 0110 = 6
echo "NOT == ~ : " . (~$a) . "<br>"; // 101
echo "Left Shift == << : " . ($a << $b) . "<br>"; // 101000 = 40
echo "Right Shift == >> : " . ($a >> $b) . "<br>"; // 0000 = 0
echo "<br>";

#Error Control Operator
$number = 10 / 0; // This will cause a division by zero error
echo @$number; // The @ operator suppresses the error message   
echo "<br>";


?>