<?php
include "registration.php"
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

            <
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
                        <div class="container">
                            <h3>Register</h3>
                            <form action="registration.php" method="post">
                                Name <br><input type="text" name="name" class="form-control"><br>
                                Mobile  <br>
                                <input type="number" name="mobile" class="form-control"><br>
                                <div class="form-group" >
                                    <label for="sel1">Blood Group</label>
                                    <select  class="form-control" id="group">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>

                                <div class="form-group" id="dist" >
                                    <label for="sel1">District</label>
                                    <select name="district" class="form-control" id="district" onchange="getdist(this.value);">
                                        <?php
                                        $value=$_POST['district'];
                                        $query = "select * from district";
                                        $result = mysqli_query($conn, $query);
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                

                                                echo '<option value="'.$row['id'].'">'.$row['dist_name'].'</option>';
                                                
                                                }
                                                } else
                                                echo '0 result';
                                                ?>
                                                



                                    </select>
                                    



                                </div>

                                <div class="form-group" id="town" >
                                    <label for="sel1">Town</label>
                                    <select name="townlist" class="form-control" id="townlist">
                                        
                                    </select>


                                </div>
                                <button type="submit" class="btn btn-success submit" >I'm a donor</button>






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
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>
            <script>
            
                                        function getdist(val)
                                        {
                                        
                                            
                                            $.ajax({
                                                type:"POST",
                                                url:"getdata.php",
                                                data:'id='+val,
                                                succes:function(data){
                                                    $("#townlist").html(data);
                                                }
                                            });
                                            
                                             
                                        }
        </script>


    </body>
</html>
