<?php
include_once 'connection.php';
if(!empty($_POST["id"])){
    $id=$_POST["id"];
    $query="select * from town where id=$id";
    $result=mysqli_query($conn,$query);
    foreach($result as $town){
        ?>
<option value="<?php echo $town["id"];?>"><?php echo $town["town_name"];?></option>
<?php
    }
}
    
    ?>

    

