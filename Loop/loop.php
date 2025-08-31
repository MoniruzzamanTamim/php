<?php

for ($i = 1; $i <=10; $i++){
    echo $i;
    echo "FOr LOOP : <br> ";
};

echo "<br>";
$j = 1;

while ($j < 10){
    echo $j;
    $j++;
    echo " While Loop <br>";
}


// Do While Loop .........

echo "<br>";
$k = 100;

do{
    echo $k;
    $k--;
    echo "Do While loop: <br>";
}while($k > 90);


echo "<br>";
// Foreach Loop (Array এর জন্য)
$fruits = ["Apple", "Banana", "Mango"];
foreach ($fruits as $fruit) {
    echo "ForEach Loop: $fruit <br>"; 
}



// Continute Loop 
$digit2 = 1;
while($digit2 < 6){
   if ($digit2 == 4){
      echo "Skipping: $digit2  <br>";
       $digit2 += 1;
       continue;
   }
   echo "$digit2 <br>" ;
   $digit2 += 1;
   }


?>