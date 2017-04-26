<?php

include 'connectdb.php';

if (!empty($_POST["town_id"])) {
    
    $town_id=$_POST["town_id"];
    $t_query = "delete from town where town.town_id=$town_id";
    $t_result = mysqli_query($conn, $t_query);

    
}
?>
