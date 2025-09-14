<?php 
$host = "arcticleathers.com";
$port = 3306;
$user = "arcticle_tamim";
$pass = "tamim123";
$db   = "arcticle_tamim";
$dbconnect = mysqli_connect($host,$user,$pass, $db);
if(!$dbconnect){
    echo " Database Can't Connect ";
};

if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$role = $_POST['role'];
// $result = "Name=" .$name . "Email=" . $email . "Phone=" . $phone . "Role= " .$role;
// echo $result;
$dataSent = "INSERT INTO user(Name,Email,Phone,Role)
              VALUES('$name','$email','$phone','$role');

  ";
mysqli_query($dbconnect,$dataSent);

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD UI - Bootstrap 5</title>
  <!-- Bootstrap 5 CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <div class="container py-5">
    <h2 class="mb-4">CRUD Operation - Bootstrap 5 UI</h2>

    <!-- Create / Update Form -->
    <div class="card mb-4">
      <div class="card-header">
        Add / Edit Record
      </div>
      <div class="card-body">
        <form action="crud.php" method= "POST">
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="name" class="form-label">Name</label>
              <input type="text" id="name" class="form-control" placeholder="Enter name" name="name">
            </div>
            <div class="col-md-6">
              <label for="email" class="form-label">Email</label>
              <input type="email" id="email" class="form-control" placeholder="Enter email" name="email">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="phone" class="form-label">Phone</label>
              <input type="text" id="phone" class="form-control" placeholder="Enter phone" name="phone">
            </div>
            <div class="col-md-6">
              <label for="role" class="form-label">Role</label>
              <select id="role" class="form-select" name= "role">
                <option selected>Choose...</option>
                <option>Admin</option>
                <option>User</option>
                <option>Guest</option>
              </select>
            </div>
          </div>
          <button type="submit" class="btn btn-primary" name ="submit">Save</button>
          <button type="reset" class="btn btn-secondary">Clear</button>
        </form>
      </div>
    </div>

    <!-- Records Table -->
    <div class="card">
      <div class="card-header">
        Records List
      </div>
      <div class="card-body p-0">
        <table class="table table-striped table-hover mb-0">
          <thead class="table-light">
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Role</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <!-- Sample static row -->
             <?php 
                $sql = "SELECT Id, Name, Email, Phone, Role FROM user";
                $result = mysqli_query($dbconnect, $sql);
                if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)) {
            ?>
                    <tr>
              <td><?php echo $row["Id"]; ?></td>
              <td><?php echo $row["Name"]; ?></td>
              <td><?php echo $row["Email"]; ?></td>
              <td><?php echo $row["Phone"]; ?></td>
              <td><?php echo $row["Role"]; ?></td>
              <td>
                <a class="btn btn-sm btn-warning" name="edit">Edit</a>
                <a href ="crud.php?id=<?php echo $row["Id"]; ?>" class="btn btn-sm btn-danger">Delete</a>
              </td>
            </tr>
             <?php           
                  }
                }
            ?>
            <!-- Add more rows as needed -->
          </tbody>
        </table>
      </div>
    </div>

  </div>



<!-- EDIT DATA -->
 <?php 

if(isset($_GET["id"])){
    $id =$_GET["id"];
    $query = "DELETE FROM user WHERE Id = '$id'";
    if(mysqli_query($dbconnect, $query)){
        header('Location:crud.php');
    }
    else{
        echo "problem";
    }
}
 mysqli_close($dbconnect);
?>


  <!-- Bootstrap 5 JS (optional, for dropdowns etc.) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
