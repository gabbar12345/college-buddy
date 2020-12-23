<?php
include 'common.php';
$email=$_POST['old'];
$new=$_POST['new'];
$r=$_POST['rnew'];
$user_id=$_SESSION['id'];
$row="SELECT * FROM user WHERE id='$user_id'";
$tr= mysqli_query($con, $row);
$ro= mysqli_fetch_array($tr);

if($new===$r && $email===$ro['password']){
$update="UPDATE user SET password='$new' WHERE id='$user_id'";
$chang=mysqli_query($con,$update);
header('location: user_detail.php');

}
 else {
     $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
    header('location: setting.php');
}
        ?>

