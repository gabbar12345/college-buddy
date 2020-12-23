<?php
require 'common.php';
$email=$_POST['email'];
$password=$_POST['password'];
$select="SELECT email,id FROM user WHERE email='$email' AND password='$password'";
$boss= mysqli_query($con, $select);
$r= mysqli_num_rows($boss);
if($r===0){
      $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
  header('location: login.php?error=' . $error);
}else{
    $total=mysqli_fetch_array($boss);
$_SESSION['email']=$total['email'];
$_SESSION['id']= $total['id'];
header('location:home.php');
}

?>
