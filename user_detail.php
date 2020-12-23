<?php
require 'common.php';
if(!isset($_SESSION['email'])){
    header('location:non_user.php');
}
?>
<html>
    <head>
      <title>Sell</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<style>
        a:hover {
            background-color: white;
            color: black !important;
            cursor: pointer;
        }
        #background-image{
            
           border:2px #5cb85c solid;
           border-radius: 0px 0px 25px 25px;
           margin-bottom: 15px;
        }
        .top-right {
  position: absolute;
  top: 6px;
  right: 22px;
}
    </style>
    </head>
    <body>
        
        <nav class='navbar navbar-success navbar-fixd-top' style="background-color:#5cb85c;position: sticky;top: 0;z-index: 1;">
            <div class='container-fluid'>
            <div class='navbar-header'>
                <a href="#" class="navbar-brand" style="color:blanchedalmond;font-family: Brush Script MT;font-size: 32px;">College Buddy</a>
            </div>
                <div class=' navbar-brand nav-link navbar-right '><a href='logout.php' style="color: white;"><i class="fa fa-power-off"></i>Logout</a></div>
                <div class='navbar-brand navbar-right '><a href='setting.php' style="color: white;"><i class="fa fa-cog"></i>Setting</a></div>
                  <div class='navbar-brand navbar-right '><a href='home.php' style="color: white;"><i class="fa fa-home"></i>Home</a></div>
            </div>
        </nav>
    <center><h1 style="font-family: Lucida Bright">WELCOME</h1>
        <?php
        $select="SELECT name FROM user WHERE id='".$_SESSION['id']."'";
        $ok= mysqli_query($con, $select);
        $t= mysqli_fetch_array($ok);
        echo "<h3 style='font-family:Copperplate;'>".$t['name']."</h3><br><br><br><br>";
        ?>
        <h4>YOUR ITEMS</h4><br><br>
        </center>
    <?php
    $st="SELECT * FROM images WHERE user_id='".$_SESSION['id']."'";
    $final=mysqli_query($con,$st);
    while($row=mysqli_fetch_array($final)){
                         echo "<div class='text-center' ><div class='col-md-3 col-xs-6 home-feature'><div id='background-image' ><img src='".$row['filename']."' height='30%' width='99%' ><div class='top-right'><a href='remove.php?id={$row['id']}'><button class='btn btn-danger'><i class='fa fa-trash' aria-hidden='true'></i>remove</button></a></div><div class='caption'><h3><b>Rs ".$row['price']."</b></h3><details><summary style='font-size:20px;'>".$row['product']."</summary><tt style='font-size:10px;'>".$row['discription']."</tt></details><h4>".$row['name']."</h4><h4>Contact:".$row['contact']."</h4><p>Addr:-".$row['address']."</p></div></div></div>";
    }
                        ?> 
    </body>
</html>
