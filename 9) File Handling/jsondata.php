
//Json Data Using Index Array --> encode & decode

<?php
$data = ["Tamim", "25"];
$convert = json_encode($data);
echo "Convert Index Array to Json type: \t" .$convert . "<br>";  // ["Tamim","25"]

$restoreData = json_decode($convert);  // object
echo " Decode Index Type Json Data : \t";
print_r($restoreData); echo "<hr";
?>




//Json Data Using associative  Array --> encode & decode

<?php

$data = ["name" => "Tamim", "age" => 25];
$convert = json_encode($data);
echo "Encode associative  Array to Json: \t" .$convert ; echo "<br>";

$restoreData = json_decode($convert, true);
echo $restoreData["name"];
echo $restoreData["age"];
?>

<?php
$data1 = ["city" => "ঢাকা", "url" => "http://tamim.com"];
echo json_encode($data1, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
?>






<?php
$arr = ["name" => "Tamim"];

try {
    echo $arr["age"]; // Key doesn't exist → notice
} catch (Error $e) {
    echo "Caught error: <br>";
} finally {
    echo "Execution complete";
}
?>


