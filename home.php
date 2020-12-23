<?php
require 'common.php';
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
            color: black !important;
            cursor: pointer;
        }
        #background-image{
            
           border:2px #5cb85c solid;
           border-radius: 0px 0px 25px 25px;
           margin-bottom: 15px;
        }
    </style>
    </head>
    <?php
    include 'header.php';
    ?>
    <body>
        <?php
        $select="SELECT * FROM images ORDER BY id DESC";
        $cf=mysqli_query($con,$select);
        ?>
        
                    <?php
                    
                    while($row=mysqli_fetch_array($cf)){
                        echo "<div class='text-center' ><div class='col-md-3 col-xs-6 home-feature'><div id='background-image' ><img src='".$row['filename']."' height='30%' width='99%' ><div class='caption'><h3><b>Rs ".$row['price']."</b></h3><details><summary style='font-size:20px;'>".$row['product']."</summary><tt style='font-size:10px;'>".$row['discription']."</tt></details><h4>".$row['name']."</h4><h4>Contact:".$row['contact']."</h4><p>Addr:-".$row['address']."</p></div></div></div>";
                        
                    }
        ?>
       
    </body>
</html>
