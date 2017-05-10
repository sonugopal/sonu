<?php
include 'connectdb.php';
if(isset($_POST['enter'])){
    $ph=$_POST['ph'];
    $check="select * from user where ph_no=$ph";
    $result=mysqli_query($conn,$check);
    if(mysqli_num_rows($result)<1){
        header('location:index.php');
        
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>delete </title>
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
        
                <link href="doners.css" rel="stylesheet" type="text/css"/>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    </head>
    <body>
<!--        <nav class="nav side">


        </nav>-->
        <section class="canvas-wrap">
            <div class="canvas-content">
                <div class="row">
                    <div class="hidden-lg col-xs-2">
<!--                        <a href="#" class="ssm-toggle-nav" title="open nav"><i class="fa fa-bars bar fa-lg" aria-hidden="true"></i></a>-->
                    </div>

                    <div class="col-xs-7">
                        <a href="index.php"><h1 id="name"><b>DhishaLifeDrops</b></h1></a>
                    </div>
                    <div class="col-xs-2">
                        <img src="img/logo2.png" id="logo">
                    </div>

                </div>
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <p id="para">Don't be terrible about life drops, The all donors in kerala ready to help you, you can find them at anywhere</p>
                        <a href="index.php"><button name="submit" type="submit" class="btn btn-success" >Back to home</button></a>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="container">
                        <div class="col-xs-6">
                            <p>Name:</p>
                            <p>Blood Group:</p>
                            <p>Mobile:</p>
                            <p>District:</p>
                            <p>Town:</p>
                        </div>
                        <div class="col-xs-6">
                            <?php
                            $list="select u.name,u.ph_no,b.group_name ,d.dist_name,t.town_name from user u,b_group b,town t,district d WHERE b.group_id=u.group_id && d.dist_id=u.dist_id && t.town_id=u.town_id && u.ph_no=$ph";
                            $result= mysqli_query($conn, $list);
                            $row= mysqli_fetch_assoc($result);
                            
                            echo '<p>'.$row['name'].'</p>';
                            echo '<p>'.$row['group_name'].'</p>';
                            echo '<p>'.$row['ph_no'].'</p>';
                            echo '<p>'.$row['dist_name'].'</p>';
                            echo '<p>'.$row['town_name'].'</p>';
                            
                            ?>
                        </div>
                        
                        
                    </div>
                    <div class="row">
                        <?php
                        session_start();
                        $_SESSION['ph']=$ph;
                        
                        ?>
                        <form action="delete.php" method="post">
                            <button class="btn btn-danger" type="submit" name="delete">Delete details</button> 
                        </form>
                        
                    </div>


                </div>


            </div>
            <div id="canvas" class="gradient"></div>

        </section>
        <script src="http://labs.rampinteractive.co.uk/touchSwipe/jquery.touchSwipe.min.js"></script>
        <script src="js/jquery.slideandswipe.min.js" type="text/javascript"></script>

        <script>
            $(document).ready(function () {
                $('.nav').slideAndSwipe();
            });
        </script>


        <!-- Main library -->
        <script src="js/three.min.js"></script>

        <!-- Helpers -->
        <script src="js/projector.js"></script>
        <script src="js/canvas-renderer.js"></script>

        <!-- Visualitzation adjustments -->
<!--        <script src="js/3d-lines-animation.js"></script>-->

        <!-- Animated background color -->

        <script src="js/color.js"></script>


    </body>
</html>

