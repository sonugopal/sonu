<?php
include 'connectdb.php';
session_start();
if(isset($_POST['delete'])){
    



        $authKey = "150911ANQ7tLF7590816d3";
        

//Multiple mobiles numbers separated by comma
        $mobileNumber = $_SESSION['ph'];

//Sender ID,While using route4 sender id should be 6 characters long.
        $senderId = "DHISHA";
//verify otp
        $otp = rand(1000, 9999);
        $ins = "insert into otp values(NULL,$otp)";
        $otp_ins = mysqli_query($conn, $ins);
//verify route

        $route = 4;

//Your message to send, Add URL encoding here.
        $message = urlencode("your otp is " . $otp);

//Define route 
//Prepare you post parameters
        $postData = array(
            'authkey' => $authKey,
            'mobiles' => $mobileNumber,
            'message' => $message,
            'sender' => $senderId,
            'route' => $route
        );

//API URL
        $url = "https://control.msg91.com/api/sendhttp.php";

// init the resource
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData
                //,CURLOPT_FOLLOWLOCATION => true
        ));


//Ignore SSL certificate verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


//get response
        $output = curl_exec($ch);

//Print error if any
        if (curl_errno($ch)) {
            echo 'error:' . curl_error($ch);
        }

        curl_close($ch);
}
    


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Donor List</title>
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
                        <div id="otp_form">
                            <p style="text-align: center">The Given otp has been sent to your given mobile number</p>
                            <form action="delete.php" method="post">
                                <h4 style="text-align: center">4 Digit OTP</h4>
                                <input type="number" name="otp_pass" class="form-control" required>
                                <a href="delete.php"><p>Resend OTP</p></a>

                                <button type="submit" class="btn btn-success" name="del">Submit</button>

                            </form>
                            
                            </div>
                            
                            <h3 id="hide">Your Details has been deleted</h3>
                            
                            

                            <?php
                            if (isset($_POST['del'])) {
                                $otp_get = $_POST['otp_pass'];
                                $otp_sel="select * from otp where otp_code=$otp_get";
                                $otp_check=mysqli_query($conn,$otp_sel);
                                $num= mysqli_num_rows($otp_check);

                                if ($num>0) {
                                    $ph=$_SESSION['ph'];
                                    $delete="delete from user where ph_no=$ph";
                                    $insquery = mysqli_query($conn, $delete);
                                    
                                    $query="delete from otp";
                                    $del_otp=mysqli_query($conn,$query);
                                    session_destroy();
                                    echo "<script type='text/javascript'>document.getElementById('hide').style.display='block'; document.getElementById('otp_form').style.display='none';</script>";
                                    
                                } else {
                                    
                                    $message = '"Wrong OTP"';
                                    echo '<p style="color:red">'.$message.'</p>';
                                }
                            }
                            ?>
                       
                        
                        
                    </div>
                    <div class="row">
                       
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


    

