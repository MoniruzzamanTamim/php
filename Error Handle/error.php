<?php

function devide($a, $b) {
    if ($b == 0) {
        throw new Exception("শূন্য দিয়ে ভাগ করা যায় না।");
    }
    $result = $a / $b;
    echo "ফলাফল: " . $result . "\n";
}

try {
    devide(10, 0);
} catch (Exception $e) {
    echo "ভুল ধরাছে: " . $e->getMessage() . "\n";
} finally {
    echo "প্রকল্প সম্পন্ন হয়েছে।"; echo "<hr>";
}
?>



<?php
//File Hanle wITH Error Handle

try{
	$path = "filsde.txt";
	//$openFile = fopen($path, "w");
	//$WriteData = fwrite($openFile, "Hello This is a Text \n");
	//echo $WriteData; echo "<br>";
	$showData = file_get_contents($path);
	echo $showData;
	if (file_exists($path)) {
		echo "✅ File exists.";
	}else {
		echo "❌ File does not exist.";
		throw new Exception("File Not Available");

	}

}
catch(Exception $e){
	   echo "Exception ধরাছে: " . $e->getMessage() .  "<br>";
}
?>

