<?php
$host = "arcticleathers.com";
$port = 3306;
$user = "arcticle_tamim";
$pass = "tamim123";
$db   = "arcticle_tamim";

// Connect
$dbconnect = mysqli_connect($host, $user, $pass, $db);
if (!$dbconnect) {
    die("❌ Database Can't Connect");
}

// Query
$sql = "SELECT Id, Name, Email, Phone, Role FROM user";
$result = mysqli_query($dbconnect, $sql);

// Check if query executed

if (mysqli_num_rows($result) > 0) {
    echo "Total Users: " . mysqli_num_rows($result) . "<br><br>";
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row["Name"];
        $email = $row["Email"];
        $phone = $row["Phone"];
        $role = $row["Role"];
        <tr>
              <td>1</td>
              <td><?php echo $name; ?></td>
              <td>john@example.com</td>
              <td>123-456-7890</td>
              <td>Admin</td>
              <td>
                <button class="btn btn-sm btn-warning">Edit</button>
                <button class="btn btn-sm btn-danger">Delete</button>
              </td>
            </tr>
     
    }
} else {
    echo "No users found.";
}


?>
