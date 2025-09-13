<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  নাম: <input type="text" name="name"><br><br>
  ইমেইল: <input type="text" name="email"><br><br>
  বয়স: <input type="number" name="age"><br><br>
  <input type="submit" value="জমা দিন">
</form>

<?php
// ডিফল্ট মান
$name = $email = $age = "";
$nameErr = $emailErr = $ageErr = "";

// ফর্ম সাবমিট হয়েছে কি না
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // নাম যাচাই
    if (empty($_POST["name"])) {
        $nameErr = "নাম দিতে হবে";
    } else {
        $name = clean_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Zঅ-হ\s]+$/u", $name)) {
            $nameErr = "শুধু অক্ষর ও স্পেস দেয়া যাবে";
        }
    }

    // ইমেইল যাচাই
    if (empty($_POST["email"])) {
        $emailErr = "ইমেইল দিতে হবে";
    } else {
        $email = clean_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "সঠিক ইমেইল দিন";
        }
    }

    // বয়স যাচাই
    if (empty($_POST["age"])) {
        $ageErr = "বয়স দিতে হবে";
    } else {
        $age = clean_input($_POST["age"]);
        if (!is_numeric($age) || $age <= 0) {
            $ageErr = "সঠিক বয়স দিন";
        }
    }

    // যদি কোনো ভুল না থাকে
    if ($nameErr == "" && $emailErr == "" && $ageErr == "") {
        echo "✅ সব কিছু সঠিক!<br>";
        echo "নাম: $name<br>";
        echo "ইমেইল: $email<br>";
        echo "বয়স: $age<br>";
    } else {
        echo "❌ কিছু ভুল হয়েছে:<br>";
        echo "$nameErr<br>$emailErr<br>$ageErr";
    }
}

// ইনপুট পরিষ্কার করার ফাংশন
function clean_input($data) {
    $data = trim($data); // সামনে-পেছনের ফাঁকা জায়গা বাদ
    $data = stripslashes($data); // ব্যাকস্ল্যাশ বাদ
    $data = htmlspecialchars($data); // XSS প্রতিরোধ
    return $data;
}
?>

</body>
</html>
