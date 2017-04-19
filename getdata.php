<?php

include_once 'registration.php';
if (!empty($_POST["id"])) {
    $town_id = $_POST["id"];
    $query = "select * from town where id=$town_id";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {


        echo '<option value="' . $row['id'] . '">' . $row['town_name'] . '</option>';
    }
}
?>



