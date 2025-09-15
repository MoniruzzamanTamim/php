<?php 
$host = "arcticleathers.com";
$user = "arcticle_tamim";
$pass = "tamim123";
$db   = "arcticle_tamim";

$dbconnect = mysqli_connect($host, $user, $pass, $db);
if (!$dbconnect) {
    echo "Database Can't Connect";
}

// ===== INSERT DATA =====
if (isset($_POST['submit'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $role  = $_POST['role'];

    $dataSent = "INSERT INTO user (Name, Email, Phone, Role) VALUES ('$name', '$email', '$phone', '$role')";
    mysqli_query($dbconnect, $dataSent);
}

// ===== DELETE DATA =====
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = "DELETE FROM user WHERE Id = '$id'";
    if (mysqli_query($dbconnect, $query)) {
        header('Location: crud.php');
        exit();
    } else {
        echo "Problem deleting data.";
    }
}

// ===== EDIT & UPDATE DATA =====
$editMode = false;
$editData = [];

if (isset($_GET["edit_id"])) {
    $editMode = true;
    $edit_id = $_GET["edit_id"];

    $sql = "SELECT * FROM user WHERE Id='$edit_id'";
    $result4 = mysqli_query($dbconnect, $sql);
    $editData = mysqli_fetch_assoc($result4);

    if (isset($_POST["edit"])) {
        $name  = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $role  = $_POST["role"];

        $sql5 = "UPDATE user SET Name='$name', Email='$email', Phone='$phone', Role='$role' WHERE Id='$edit_id'";
        if (mysqli_query($dbconnect, $sql5)) {
            header("Location: crud.php");
            exit();
        } else {
            echo "Update failed!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD - Bootstrap 5</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-5">
  <h2 class="mb-4">CRUD Operation - Bootstrap 5</h2>

  <!-- Add / Edit Form -->
  <div class="card mb-4">
    <div class="card-header">
      <?php echo $editMode ? "Edit Record" : "Add Record"; ?>
    </div>
    <div class="card-body">
      <form action="crud.php<?php echo $editMode ? '?edit_id=' . $editData['Id'] : ''; ?>" method="POST">
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" class="form-control" name="name" placeholder="Enter name" value="<?php echo $editMode ? $editData['Name'] : ''; ?>">
          </div>
          <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" class="form-control" name="email" placeholder="Enter email" value="<?php echo $editMode ? $editData['Email'] : ''; ?>">
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" id="phone" class="form-control" name="phone" placeholder="Enter phone" value="<?php echo $editMode ? $editData['Phone'] : ''; ?>">
          </div>
          <div class="col-md-6">
            <label for="role" class="form-label">Role</label>
            <select id="role" class="form-select" name="role">
              <option <?php if ($editMode && $editData['Role'] == 'Admin') echo 'selected'; ?>>Admin</option>
              <option <?php if ($editMode && $editData['Role'] == 'User') echo 'selected'; ?>>User</option>
              <option <?php if ($editMode && $editData['Role'] == 'Guest') echo 'selected'; ?>>Guest</option>
            </select>
          </div>
        </div>
        <button type="submit" class="btn btn-primary" name="<?php echo $editMode ? 'edit' : 'submit'; ?>">
          <?php echo $editMode ? 'Update' : 'Save'; ?>
        </button>
        <a href="crud.php" class="btn btn-secondary">Clear</a>
      </form>
    </div>
  </div>

  <!-- Records Table -->
  <div class="card">
    <div class="card-header">Records List</div>
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
          <?php 
            $sql = "SELECT Id, Name, Email, Phone, Role FROM user";
            $result = mysqli_query($dbconnect, $sql);
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
          ?>
          <tr>
            <td><?php echo $row["Id"]; ?></td>
            <td><?php echo $row["Name"]; ?></td>
            <td><?php echo $row["Email"]; ?></td>
            <td><?php echo $row["Phone"]; ?></td>
            <td><?php echo $row["Role"]; ?></td>
            <td>
              <a href="crud.php?edit_id=<?php echo $row["Id"]; ?>" class="btn btn-sm btn-warning">Edit</a>
              <a href="crud.php?id=<?php echo $row["Id"]; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
            </td>
          </tr>
          <?php } } else { ?>
            <tr><td colspan="6" class="text-center">No records found</td></tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
