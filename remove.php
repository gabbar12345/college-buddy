
<?php

require 'common.php';
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET["id"]; 
    $user_id = $_SESSION['id'];
    
    // Delete the rows from user_items table where item_id and user_id equal to the item_id and user_id we got from the cart page and session
    $quer = "DELETE FROM images WHERE id='$item_id' AND user_id='$user_id'";
    $res = mysqli_query($con, $quer) or die(mysqli_error($con));
    header("location:user_detail.php");
}
?>
<html>
    <head>
        <script>
        alert ("Do you really want to remove");
        </script>
    </head>
</html>