
<?php
include 'connectdb.php';

?>
<?php
if(isset($_POST['submit'])){
    $name=$_POST["name"];
    $mobile=$_POST["mobile"];
    $district=$_POST['district'];
    $town=$_POST['townlist'];
    $blood=$_POST['blood'];
    
    

    
    $insert="insert into user values(null,'$name',$mobile,'$blood',$town,$district)";
    $insquery= mysqli_query($conn, $insert);
    
}

        
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dishakerala</title>
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
                        <h1 id="name"><b>Dishakerala</b></h1>
                    </div>

                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <p>Now you are a blood donor<br>You will be become a hero</p>
                        <a href="home.php"><button class="btn-success submit">Home</button></a>
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



