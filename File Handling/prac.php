<!-- 🧩 Task 1: Write and Read -->
<?php

echo "Practise <hr>";
$file_path = "info.txt";
$info_open = fopen($file_path, "w" );
$info_write = fwrite($info_open, "Hello PHP! I Love PHP ");
$read_file = file_get_contents($file_path);
echo $read_file; echo "<br>";
// 
$info_open = fopen($file_path, "r" );
$read_file1 = fread($info_open, filesize($file_path));
fclose($info_open);
echo $read_file1; echo "<br>";

// 

$info_open = fopen($file_path, "r" );
while($read_file2 = fgets($info_open)==!false){
    echo $read_file2 ; echo "<br>";
}

$lines = file($file_path);
foreach($lines as $line){
    echo $line; echo "<br>";
}
fclose($info_open);
?>

<!-- 🧩 Task 2: Append -->

<?php
echo "Practise <hr>";
$file_path = "info.txt";
$open_file = fopen("info.txt", "a");
$appent_value = fwrite($open_file, "\nToday I practiced file handling.");

$open_file1= fopen("info.txt", "r");
$result = file_get_contents($file_path);
echo nl2br($result);
fclose($open_file1);echo "<br>";
?>


<!-- 🧩 Task 3: Check File Exists and Show Full Path -->
<?php
echo "Practise <hr>";
$file_path = "info.txt";
if (file_exists($file_path)){
    echo "This File Is Available Now <br>";
    echo "File Path:\t";echo __DIR__; echo "  || File Size: \t " . filesize($file_path); echo "byte";
}else{
    echo " File Not Found!";
}
?>

<!-- 🎯 Bonus Task – Level 2 (Intermediate) -->
<?php
echo " <br>  <hr>";
$file_path = "info.txt";
$readFile = fopen($file_path, "r");
$index = 0;
$ReadFile = file($file_path);
foreach ($ReadFile as $line){
    echo $line . "<br>";
    $index++;
    echo $index;
}
?>


<?php
echo " <br>  <hr>";
$file_path = "info.txt";
if (file_exists($file_path)) {
    $content = file_get_contents($file_path); // পুরো ফাইল পড়া
    if (stripos($content, "PHP") !== false) {
        echo "✅ Word found!";
    } else {
        echo "❌ Word not found.";
    }
} else {
    echo "❌ File not found.";
}
?>
