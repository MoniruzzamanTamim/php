<!-- 1️⃣ Indexed Array	 -->
<?php

$fruits = ['mango','banana','Apple','water-melon'];
echo " Acess Array Data Using Index Number ........ <br>";
echo $fruits[0]; echo "<br>";
echo $fruits[1]; echo "<br>";
echo $fruits[2]; echo "<br>";
echo $fruits[3]; echo "<br>";
echo "<br>";
echo " Acess Array Data Using Foreach Loop........ <br>";
foreach( $fruits as $fruit){
    echo " $fruit <br>";
};
?>


<!-- 2) Associative Array -->
<?php
echo "<hr>";
$student = [
    "name" => "Tamim",
    "age" => 22,
    "grade" => "A"
];

// 1) Key দিয়ে সরাসরি
echo $student["name"]; // Tamim
echo "<br>";
echo $student["grade"]; // A
echo "<br>";
// 2) foreach দিয়ে লুপ চালিয়ে
foreach($student as $key => $value){
    echo "$key : $value <br>";
};
echo "<br>";
// 3) array_keys() / array_values() ব্যবহার করে
$keys = array_keys($student);     // ["name","age","grade"]
$values = array_values($student); // ["Tamim",22,"A"]
print_r($keys); echo "<br>";
print_r($values); echo "<br>";

?>


<!-- Multidimensional ARRAY -->
<?php
echo "<hr>";
// 1) Index Array ....................
$store = [
        [10, "tamim", "CSE", "Spring-23"],
        [11, "jibin", "CSE", "Spring-22"],
        [10, "tamim", "CSE", "Spring-24"]
];

echo $store[0][0]; echo "<br>";
echo $store[0][1]; echo "<br>";
echo $store[0][2]; echo "<br>";
echo $store[0][3]; echo "<br>";
echo "<hr>";

foreach($store as $Store){
    foreach($Store as $key=>$value){
        echo "$key:$value" ; echo "<br>";
    };
};
echo "<hr>";
// 2) Associative Array ...........

$store = [
        ["id"=> 10, "name"=>"tamim", "department" => "CSE", "session"=> "Spring-23"],
        ["id"=> 11, "name"=>"iqbal", "department" => "CSE", "session"=> "Spring-23"],
        ["id"=> 12, "name"=>"jibin", "department" => "CSE", "session"=> "Spring-23"],   
];

echo "ID: " .$store[0]["id"] ; echo "<br>";
echo "Name: " .$store[1]["name"] ; echo "<br>";
echo "Department: " .$store[2]["department"] ; echo "<br>";
echo "Session: " .$store[2]["session"] ; echo "<br>";

foreach ($store as $Store) {
    echo $Store["name"];
};
// OR
foreach ($store as $Store) {
    foreach($Store as $data){
        echo $data; echo "<br>" ;
    }
};


?>

<?php

echo "<hr>";
echo "Array Method................................";echo "<br>";

$a = [10,20,35];
echo "Orginal Array: " ; print_r($a);echo "<br>";
$add = array_push($a, 50); echo "Add Data: $add" ;echo "<br>"; 
echo "After Add Data in  Array: " ; print_r($a);echo "<br>";

echo "LENTH: " . (count($a));
echo " "
?>