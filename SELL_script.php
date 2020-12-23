<?php
include'common.php';
$name=$_POST['Name'];
$cont=$_POST['cont'];
$addr=$_POST['address'];
$option=$_POST['option'];
$price=$_POST['price'];
$detail=$_POST['detail'];
$product=$_POST['product'];
$image=$_FILES["upload"]["name"];
$tmp_name=$_FILES["upload"]["tmp_name"];
$folder="images/".$image;
$user=$_SESSION['id'];
move_uploaded_file($tmp_name,$folder);
$insert="INSERT INTO images(name,contact,address,category,product,price,discription,filename,user_id) VALUES ('$name','$cont','$addr','$option','$product','$price','$detail','$folder','$user')";
$result=mysqli_query($con,$insert);
?>
<html>
    <head>
        <title>Thank You</title>

    </head>
    <body>
        <?php
        header('location:home.php');
        ?>
    </body>
</html>
