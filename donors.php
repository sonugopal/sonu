<?php
include "connectdb.php"
?>
<?php
if (isset($_POST['submit'])) {


    $district = $_POST['district'];
    $town = $_POST['townlist'];
    $blood = $_POST['blood'];
}
?>
<?php
if($town=='any'){
    $b_query = "select * from user where dist_id=$district && group_id=$blood";
    
}
else{
    $b_query = "select * from user where town_id=$town && group_id=$blood && dist_id=$district";
}

$result = mysqli_query($conn, $b_query);
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
                        <a href="index.php"><button name="submit" type="submit" class="btn btn-danger" >Back to home</button></a>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="container">
                        <div class="col-xs-12 tab">
                            
                            <br>
                            <h3>Donor List</h3>
                            <table class="table" id="tab">
                                <thead>
                                <td>Name</td>
                                <td>Mobile</td>
                                </thead>
                                <tbody id="td">
                                    <?php
                                    
                                    
                                        while ($row= mysqli_fetch_assoc($result)){
                                            echo '<tr><td>'.$row['name'].'</td><td>'.$row['ph_no'].'</td></tr>';
                                        }
                                        
                                    ?>
                                </tbody>
                            </table>

                        </div>
                    </div>


                </div
        </section>>


            </div>
            <div id="canvas" class="gradient"></div>

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

