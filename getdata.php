<?php

include_once 'connectdb.php';
if (!empty($_POST["dist_id"])) {
    $dist_id = $_POST["dist_id"];
    $t_query = "select * from town where dist_id=$dist_id";
    $t_result = mysqli_query($conn, $t_query);

    while ($row = mysqli_fetch_assoc($t_result)) {


        echo '<option value="'.$row['town_id'].'">'.$row['town_name'].'</option>';
    }
}
?>




