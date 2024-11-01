<?php
include("connect.php");
if(isset($_POST['submit'])){
    $Name= $_POST['name'];
    $Mail= $_POST['email'];
    $Msg= $_POST['message'];

    $query=mysqli_query($conn,"insert into customers (name,email,message) values('$Name','$Mail','$Msg')");
    if($query){
      header("Location: index.html");
    }else{
      header("Location: index.html");
    }
  }
mysqli_close($conn);
?>