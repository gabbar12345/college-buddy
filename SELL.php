<?php
require 'common.php';
if(!isset($_SESSION['email'])){
    header('location:login.php');
}
?>
<html>
<head>
<title>index</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <?php
    require 'home2.php';
    ?>
<div class="container" style="width:600px;margin-bottom:185px;">
    <div class="panel panel-success">
        <div class="panel-heading">
            <center><h2>WELCOME</h2></center>
</div>
        <div class="panel-body">
            <form method="post" action="SELL_script.php" enctype="multipart/form-data">
<div class="form-group">
    <input type="text" placeholder="Enter Your Name" class="form-control" name="Name" required>
</div>
    <div class="form-group">
        <input type="tel" placeholder="Contact Number" class="form-control" pattern="[6789][0-9]{9}" name="cont" required>
</div>
        <div class="form-group">
            <textarea name="address" placeholder="enter address" class="form-control" required></textarea>
</div>
    <div class="form-group">
        <select class="form-control" name="option">
             
            <option value="Books">Books</option>
            <option value="components">Components</option>
            <option value="other">Other</option>
        </select>
</div>
                <div class="form-group">
                    <input type="text" placeholder="Product Name" name="product" class="form-control">
                </div>
     <div class="form-group">
         <input type="number" placeholder="price" class="form-control" name="price" required>
</div>   
<div class="form-group">
    <textarea name="detail" placeholder="Provide few information about product (like how's product condition,when baught, etc.)" class="form-control" required></textarea>
</div>
    <div class="form-group">
        <input type="file" placeholder="upload" class="form-control" name="upload" required>
</div>
                <center>  <button class="btn btn-success btn-block">submit</button></center>
</form>
</div> 
</div>
    <div class="panel-footer">
<p><center>Copyright<span class="glyphicon glyphicon-copyright-mark"></span> College Buddy. All Rights Reserved | Contact Us: +91 90000 00000</center></p>
</div>
    </div>
    </div>
</body>
</html>

