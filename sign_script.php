<?php
include 'common.php';
$email=$_POST['email'];
$name=$_POST['name'];
$password=$_POST['password'];
$cnt=$_POST['contact'];
$select="SELECT * FROM user WHERE email='$email'";
$ubmit=mysqli_query($con,$select);
$rows=mysqli_num_rows($ubmit);
if($rows!=0){
    
    header('location:signup.php');
    echo "already registered";
}else{
$data="INSERT INTO user(name,email,password,contact) VALUES('$name','$email','$password','$cnt')";
$final=mysqli_query($con,$data);
$arr=mysqli_fetch_array($final);
$_SESSION['email']=$email;
$_SESSION['id']= mysqli_insert_id($con);
header('location:home.php');
}
?>