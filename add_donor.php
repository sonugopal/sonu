<?php
include 'connectdb.php';

if(!empty($_POST['mob'])){
    $name=$_POST["name"];
    $mobile=$_POST["mob"];
    $district=$_POST['dist_id'];
    $town=$_POST['town_id'];
    $blood=$_POST['blood'];
    
    $check="select * from user where ph_no=$mobile";
    $ph_check=mysqli_query($conn,$check);
    if(mysqli_num_rows($ph_check)>0){
        $status="The given mobile has already registered";
        echo $status;
        
    }
    else{
    $insert="insert into user values(null,'$name',$mobile,'$blood',$town,$district)";
    $insquery= mysqli_query($conn, $insert);
    $status="Registration Success";
    if($insquery){
    $s='New donor added';
    }
    else{
        $s="Adding new donor failed";
    }
    echo $s;
   
        
    
    
    }
     
    
}
?>


