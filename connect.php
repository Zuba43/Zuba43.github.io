<?php
$conn=mysqli_connect("localhost","root","","giantmedia");
if(!$conn){
  die("Connection failed".mysqli_connect_error($conn));
}
?>