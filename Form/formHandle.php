<html>
<body>
  <!-- //GET METHOD Showing Details in URLS   -->
<form action="formHandle.php" method="GET">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
<div class="result">
  <?php echo $_GET['name']; ?>
  <?php echo $_GET['email']; ?>
  <br><br><br>
</div>





<form action="formHandle.php" method="POST">
  <label for="name">
    <input type="text" name="pname" id="" placeholder='Type Your Name'>
  </label>
  <label for="email">
    <input type="email" name="pemail" id="" placeholder='Type Your email'>
  </label>
  <label for="password">
    <input type="password" name="ppassword" id="" placeholder='Type Your Password'>
  </label>
  <input type="submit" value="Submit Vallue ">
</form>

<div class="result">
  <?php 
  $name = $_POST['pname'];
  $email = $_POST['pemail'];
  $password = $_POST['ppassword'];

  echo " Hello " . $name . " ".$email . " Password " . $password ; 
  ?>
</div>
</body>
</html>