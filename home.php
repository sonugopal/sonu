<?php
include "connectdb.php"
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

                    <div class="col-lg-7 col-xs-8">
                        <h1 id="name"><b>DhishaKerala</b></h1>
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
                            <form action="donors.php" method="post" class="find">
                                <br>
                                
                                
                                <h3>Find donor</h3>
                                    
                                    
                                <div class="form-group" >

                                    
                                    <select name="blood" class="form-control b_align" id="group" required>

                                        <?php
                                        $b_query = "select * from b_group";
                                        $b_result = mysqli_query($conn, $b_query);
                                        if (mysqli_num_rows($b_result)) {
                                            while ($row = mysqli_fetch_assoc($b_result)) {
                                                echo '<option value="' . $row['group_id'] . '">' . $row['group_name'] . '</option>';
                                            }
                                        }
                                        ?>


                                    </select>
                                </div>

                                <div class="form-group" id="town">
                                    
                                    <select name="district" class="form-control" id="district">

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

                                <div class="form-group" id="town" >
                                    
                                    <select name="townlist" class="form-control" id="townlist">

                                    </select>


                                </div>
                                
                                <button name="submit" type="submit" class="btn btn-success" >Find Donors</button>
                                <br>
                                <br>
                            </form>
                            <br>
                            <br>
                            

                        </div>
                    </div>


                </div>
                <div class="row text-center">
                    <div class="col-xs-12">
                        <p>Give life drops to people to become a hero<br>Do you interested?</p>
                        <a href="reg.php"><button name="submit" type="submit" class="btn btn-danger" >Be a donor</button></a>
                         
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
