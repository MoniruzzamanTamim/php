<!-- 1. fread() — পুরো ফাইল একবারে পড়া -->
<?php
$fp = fopen("file.txt", "r");
$data = fread($fp, filesize("file.txt")); // পুরো ফাইল পড়া
fclose($fp);
echo $data;
?>
<!-- 📌 ব্যবহার করো যখন: ছোট ফাইল পড়তে চাও একবারে। -->

<!-- 🔰 2. fgets() — লাইন বাই লাইন পড়া -->
<?php
$fp = fopen("file.txt", "r");
while (($line = fgets($fp)) !== false) {
    echo $line . "<br>";
}
fclose($fp);
?>
<!-- 📌 ব্যবহার করো যখন: ফাইল বড়, আর লাইন করে পড়তে চাও। -->

<!-- 🔰 3. file() — ফাইলকে অ্যারে হিসেবে পড়া -->
<?php
$lines = file("file.txt"); // লাইন ধরে অ্যারেতে পড়ে
foreach ($lines as $line) {
    echo $line . "<br>";
}
?>
<!-- 📌 ব্যবহার করো যখন: সব লাইন একসাথে অ্যারেতে দরকার। -->

<!-- 🔰 4. file_get_contents() — সবচেয়ে সহজ উপায় -->
<?php
$content = file_get_contents("file.txt");
echo $content;
echo  __DIR__;
?>
<!-- 📌 ব্যবহার করো যখন: সরাসরি পুরো কন্টেন্ট একবারে দরকার। -->

