<?php
include 'connectdb.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dhisha kerala</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="css/slide-and-swipe-menu.css" rel="stylesheet" type="text/css"/>
        <link href="reg.css" rel="stylesheet" type="text/css"/>
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/dropdown.js" type="text/javascript"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="login.css" type="text/css">
        
    <body>
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="form-group" id="panel">
                        <form action="login.php" method="POST">
                            <h3>Admin Login</h3>
                            User name<br>
                            <input type="text" name="user" class="form-control" required>
                            Password<br>
                            <input type="password" name="password" class="form-control" id="input" required>
                            <br>
                            <button name="admin" type="submit" class="btn btn-success b_align">Login</button>
                            
                                
                        </form>
                        <?php
                        if(isset($_POST['admin'])){
                        $user=$_POST['user'];
                        $pass=$_POST['password'];
                        $check="select * from admin where username='$user' && password='$pass'";
                        
                        $result=mysqli_query($conn,$check);
                        if(mysqli_num_rows($result)<1){
                            echo 'Username or password entered incorrect';
                        }
                        else{
                            session_start();
                            $_SESSION['user']=$user;
                            $_SESSION['password']=$pass;
                            header('location:admin.php');
                        }
                        }
                        
                            
                        
                        
                                
                        ?>
                        
                    </div>
                         
                </div>
            </div>

        </div>
        
    </body>
    </head>
</html>
