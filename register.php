<?php
include 'connectdb.php';
session_start();
$name=$_SESSION['name'];
$mobile=$_SESSION['mobile'];
$district=$_SESSION['district'];
$town=$_SESSION['town'];
$blood=$_SESSION['blood'];
   

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registration</title>
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
                        <h1 id="name"><b>DhishaLifeDrops</b></h1>
                    </div>
                    <div class="col-xs-2">
                        <img src="img/logo2.png" id="logo">
                    </div>

                </div>
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <p id="para">Don't be terrible about life drops, The all donors in kerala ready to help you, you can find them at anywhere</p>

                    </div>
                </div>
                <div class="row text-center">
                    <div class="container">
                        <div class="col-xs-12">
                            <br>
                            <br>
                            <div id="otp_form">
                            <p style="text-align: center">The Given otp has been sent to your given mobile number</p>
                            <form action="register.php" method="post">
                                <h4 style="text-align: center">4 Digit OTP</h4>
                                <input type="number" name="otp_pass" class="form-control" required>

                                <button type="submit" class="btn btn-success" name="verify">Submit</button>

                            </form>
                            </div>
                            <br>
                            <h3 id="hide">Registration successfull...</h3>
                            <br>
                            <a href="home.php"><button  class="btn btn-primary">Back to home</button></a>

                            <?php
                            if (isset($_POST['verify'])) {
                                $otp_get = $_POST['otp_pass'];
                                $otp_sel="select * from otp where otp_code=$otp_get";
                                $otp_check=mysqli_query($conn,$otp_sel);
                                $num= mysqli_num_rows($otp_check);

                                if ($num>0) {
                                    $insert = "insert into user values(null,'$name',$mobile,'$blood',$town,$district)";
                                    $insquery = mysqli_query($conn, $insert);
                                    
                                    $query="delete from otp";
                                    $del_otp=mysqli_query($conn,$query);
                                    echo "<script type='text/javascript'>document.getElementById('hide').style.display='block'; document.getElementById('otp_form').style.display='none';</script>";
                                    
                                } else {
                                    
                                    $message = "Wrong OTP";
                                    echo "<script type='text/javascript'>alert('$message');</script>";
                                }
                            }
                            ?>




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




