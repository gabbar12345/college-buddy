
<html>
<head>
<title>Registration Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    <?php
    include 'home2.php';
    ?>
<div class="container" style="width:600px;margin-bottom:185px;">
<div class="panel panel-success">
    <div class="panel-heading">
<h2>SIGN UP</h2>
</div>
    <div class="panel-body">
        <form method="post" action="sign_script.php">
<div class="form-group">
    <input type="text" placeholder="Name" class="form-control" name="name" required>
</div>
<div class="form-group">
    <input type="email" placeholder="Email" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
</div>
<div class="form-group">
    <input type="Password" placeholder="Set Password" class="form-control" name="password" pattern=".{4,}" required>
</div>
<div class="form-group">
    <input type="tel" placeholder="Contact Number" class="form-control" pattern="[6789][0-9]{9}" name="contact" required>
</div>
<button class="btn btn-success btn-block">Submit</button>
</form>
</div>
    <div class="panel-footer">
        <p>Already have a Account <a href="login.php">Login Here</a></p>
    </div>
    </div>
</body>
</html>



