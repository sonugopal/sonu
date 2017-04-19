<?php

include_once 'registration.php';
if (!empty($_POST["dist_id"])) {
    $town_id = $_POST["dist_id"];
    $query = "select * from town where dist_id= $dist_id";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {


        echo '<option value="'.$row['town_id'].'">'.$row['town_name'].'</option>';
    }
}
?>
<html>
    <head>
    <body>
        <?php
        $sonu=$town_id;
        echo $sonu;
        ?>
    </body>
    </head>
</html>



