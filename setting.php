
<?php
require 'common.php';
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
include 'home2.php';
?>
<div style="width:600px;margin-left:500px;margin-bottom:378px;">
<h3>Change Password</h3>
<form method="post" action="settings.php">
<div class="form-group" >
<input type="password" placeholder="Old Password" class="form-control" name="old">
</div>
<div class="form-group">
    <input type="password" placeholder="New Password" class="form-control" name="new">
</div>
<div class="form-group">
    <input type="password" placeholder="Re-type Password" class="form-control" name="rnew">
</div>
<p><button class="btn btn-success">change</button></p>
</form>

</div>
</body>
</html>

