<?php

include 'connectdb.php';

if(!empty($_POST['mob'])){
    $mob=$_POST['mob'];
    $query="delete from user where ph_no=$mob";
    $result= mysqli_query($conn, $query);
}
?>

