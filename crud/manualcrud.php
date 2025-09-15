<?php
// ====Connect database ====

$server = 'arcticleathers.com';
$username = 'arcticle_tamim';
$password = 'tamim123';
$database = 'arcticle_tamim';
$connectDB = mysqli_connect($server,$username,$password,$database);
if(!$connectDB){
  echo"  Wlcome TAMIM";
}
?>

<table>
    <thead>
        <td>Name</td>
        <td>Name</td>
        <td>Name</td>
    </thead>
    <tbody>
        <td>Tamim</td>
        <td>Tamim</td>
        <td>Tamim</td>
    </tbody>
</table>