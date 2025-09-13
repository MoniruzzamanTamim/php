

<?php
$servername = "localhost";
$username = "root";
$password = "";
$connectDB = mysqli_connect($servername,$username,$password);

if ($connectDB){
    echo " Server  Connect Successfully.... " ;
}
else{
    echo " Server Not Connect!.... <br>";
}
echo "<hr>";

// Create Database

$database = "CREATE DATABASE phpfile";

if (mysqli_query($connectDB,$database)){
    echo "Database Create Successfully........ ";
}
else{
     echo "Database Create Successfully........ ";
}

echo "<hr>";
?>
<!-- // Create table Data  -->
<?php
// Create table Data 
$servername = "localhost";
$username = "root";
$password = "";
$phpDB = "phpfile";

// Connect to database
$connectDB = mysqli_connect($servername, $username, $password, $phpDB);

if ($connectDB) {
    echo "Server connected successfully.<br>";
} else {
    echo "Server not connected!<br>";
    die("Connection failed: " . mysqli_connect_error()); // Add this for debugging
}

// Create students table
$studentsTB = "CREATE TABLE students (
    ID INT(10) UNIQUE AUTO_INCREMENT PRIMARY KEY,
    NAME VARCHAR(20),
    ROLL INT(12),
    SUB VARCHAR(20),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($connectDB, $studentsTB)) {
    echo "Table 'students' created successfully.<br>";
} else {
    echo "Error creating table: " . mysqli_error($connectDB) . "<br>";
}

mysqli_close($connectDB);
echo '<hr>';
?>

<!-- INSERt  DATA  -->

<?php

$servername = "localhost";
$username ="root";
$password = "";
$dbname = "phpfile";
$tablename = "students";
$connectDB = mysqli_connect($servername,$username,$password,$dbname);

if ($connectDB){
    echo " Database Connect Successfully........"; echo '<br>';
}
else{
     echo " Database Connect Failed........"; echo '<br>';
};

$insertData = "INSERT INTO students(NAME,ROLL,SUB)
VALUES ('Tamim', 23105036,'CSE')
";
if (mysqli_query($connectDB,$insertData)){
    echo " Student table Updated...."; echo "<br>";
}
else{
    echo " Data inser not Successfullt..", mysqli_error();echo '<br>';
}

mysqli_close($connectDB);
echo '<hr>';
?>

<!-- Insert Multiple Value  -->
<?php
$servername = "localhost";
$username ="root";
$password = "";
$dbname = "phpfile";
$tablename = "students";
$connectDB = mysqli_connect($servername,$username,$password,$dbname);

if ($connectDB){
    echo " Database Connect Successfully........"; echo '<br>';
}
else{
     echo " Database Connect Failed........"; echo '<br>';
};

$insertsData = "
INSERT INTO students(NAME, ROLL, SUB) VALUES
('Tamim', 23105001, 'CSE'),
('Rahim', 23105002, 'CSE'),
('Karim', 23105003, 'CSE'),
('Sajid', 23105004, 'CSE'),
('Nayeem', 23105005, 'CSE'),
('Hasib', 23105006, 'CSE'),
('Rafi', 23105007, 'CSE'),
('Jahid', 23105008, 'CSE'),
('Mamun', 23105009, 'CSE'),
('Rasel', 23105010, 'CSE'),
('Naim', 23105011, 'CSE'),
('Rony', 23105012, 'CSE'),
('Joy', 23105013, 'CSE'),
('Emon', 23105014, 'CSE'),
('Mehedi', 23105015, 'CSE'),
('Shuvo', 23105016, 'CSE'),
('Rakib', 23105017, 'CSE'),
('Fahim', 23105018, 'CSE'),
('Sohel', 23105019, 'CSE'),
('Rubel', 23105020, 'CSE'),
('Sohan', 23105021, 'CSE'),
('Imran', 23105022, 'CSE'),
('Bappy', 23105023, 'CSE'),
('Niloy', 23105024, 'CSE'),
('Hridoy', 23105025, 'CSE')
";

if (mysqli_query($connectDB, $insertsData)) {
    echo "25 Students inserted successfully.<br>";
} else {
    echo "Error inserting data: " . mysqli_error($connectDB) . "<br>";
}
echo '<hr>';

?>


<!-- Select OR Collect Data -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$phpDB = "phpfile";

// Connect to database
$connectDB = mysqli_connect($servername, $username, $password, $phpDB);

if (!$connectDB) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch all students
$sql = "SELECT * FROM students WHERE ROLL > 15 LIMIT 25";
$result = mysqli_query($connectDB, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<h2>Student List</h2>";
    echo "<table border='1' cellpadding='10'>";
    echo "<tr><th>ID</th><th>Name</th><th>Roll</th><th>Subject</th><th>Registered Date</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["ID"] . "</td>";
        echo "<td>" . $row["NAME"] . "</td>";
        echo "<td>" . $row["ROLL"] . "</td>";
        echo "<td>" . $row["SUB"] . "</td>";
        echo "<td>" . $row["reg_date"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No students found.";
}

mysqli_close($connectDB);
?>


<?php 

$servername = 'localhost';
$username = "root";
$password = '';
$dbname = "phpfile";
$connectDB = mysqli_connect($servername,$username,$password,$dbname);

if($connectDB){
    echo "Connect Db Succeshfully";

}

$deletedata = "
DELETE FROM students where ROLL < 23105036;
";

if (mysqli_query($connectDB, $deletedata)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($connectDB);
}

mysqli_close($connectDB);
?>