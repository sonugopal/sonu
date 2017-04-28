<?php
include 'connectdb.php';
?>
<?php
if (!empty($_POST["town"])) {
    $dist_id = $_POST["dist_id"];
    $name=$_POST['town'];
    $query="insert into town values(NULL,'$name',$dist_id)";
    $result=mysqli_query($conn,$query);
    $s='success';
    echo $s;
    
}


?>