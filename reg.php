<?php
include "connectdb.php"
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register as Donor</title>
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




    </head>
    <body>
        <nav class="nav side">

            
        </nav>
        <section class="canvas-wrap">
            <div class="canvas-content">
                <div class="row">
                    <div class="hidden-lg col-xs-2">
                        <a href="#" class="ssm-toggle-nav" title="open nav"><i class="fa fa-bars bar fa-lg" aria-hidden="true"></i></a>
                    </div>

                    <div class="col-xs-7">
                        <a href="home.php"><h1 id="name"><b>DhishaLifeDrops</b></h1></a>
                    </div>
                    <div class="col-xs-2">
                        <img src="img/logo2.png" id="logo">
                    </div>

                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="container">
                            <h3>Register</h3>
<!--                            //check mobile number already registerd-->
                            <?php
                            session_start();
                            if(!empty($_SESSION['err'])){
                                echo '<script>alert("The given mobile number has already registered")</script>';
                            }
                            ?>
                            <form action="verify_otp.php" method="post">
                                Name <br><input type="text" name="name" class="form-control" required><br>
                                Mobile  <br>
                                <input type="number" name="mobile" class="form-control" required><br>
                                <div class="form-group" >
                                    <label for="sel1">Blood Group</label>
                                    <select name="blood" class="form-control" id="group" required>
                                        <option value="">--Select Group--</option>
                                        
                                        <?php
                                        $b_query="select * from b_group";
                                        $b_result=mysqli_query($conn,$b_query);
                                        if(mysqli_num_rows($b_result)){
                                        while ($row= mysqli_fetch_assoc($b_result)){
                                            echo '<option value="'.$row['group_id'].'">'.$row['group_name'].'</option>';
                                        }
                                        }
                                        ?>
                                                
                                        
                                    </select>
                                </div>

                                <div class="form-group" id="dist" >
                                    <label for="sel1">District</label>
                                    <select name="district" class="form-control" id="district" required>
                                        <option value="">--District--</option>
                                        
                                        <?php
                                        
                                        $d_query = "select * from district";
                                        $d_result = mysqli_query($conn, $d_query);
                                        if (mysqli_num_rows($d_result) > 0) {
                                            while ($row = mysqli_fetch_assoc($d_result)) {


                                                echo '<option value="' . $row['dist_id'] . '">' . $row['dist_name'] . '</option>';
                                            }
                                        } else
                                            echo '0 result';
                                        ?>




                                    </select>





                                </div>

                                <div class="form-group" id="dist" >
                                    <label for="sel1">Town</label>
                                    <select name="townlist" class="form-control" id="townlist" required="">
                                        <option value="">--Town--</option>

                                    </select>
                                    <img src="img/loading.gif" id="load">


                                </div>
                                <button name="submit" type="submit" class="btn btn-success submit" >I'm a donor</button>






                            </form>
                        </div>
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
        <script src="js/3d-lines-animation.js"></script>

        <!-- Animated background color -->

        <script src="js/color.js"></script>
        
     
        
        
            
       


    </body>
</html>
