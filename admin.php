
<?php
include 'connectdb.php';
session_start();
if (!isset($_SESSION['password'])) {

    header("location:home.php");
}
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
        <script src="js/admin_dropdown.js" type="text/javascript"></script>


        <script src="js/admin.js" type="text/javascript"></script>


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="login.css" type="text/css">

    <body>
        <div class="container">
            <div class="row admin">
                <div class="container">
                    <div class="col-xs-12">
                        <div class="row">
                            <h1 style="float: left">Admin Pannel</h1>
                            <a href="logout.php" id="logout">logout</a>
                            
                        </div>
                        <div class="row">
                            <?php
                            $query="select * from user";
                            $total=mysqli_query($conn,$query);
                            $num=mysqli_num_rows($total);
                            echo '<h5>Total Donors:'.$num.'</h5>';
                            ?>
                        </div>
                        <br>
                        



                        <div class="row border-bottom-0 butt">
                            <button class="btn btn-primary" id="add_tow">Add town</button>
                            <button class="btn btn-danger" id="del_to">Delete town</button>
                            <button class="btn btn-primary" id="add_user">Add donor</button>
                            <button class="btn btn-danger" id="del_user">Delete donor</button>
                        </div>
                        <?php
                        if(!empty($_SESSION['t_add'])){
                            $status=$_SESSION['t_add'];
//                            echo '<script>alert("'.$status.'")</script>';
                        }
                        ?>
                        <!--                        add town-->
                        <div id="tow">
                           
                                <select name="district" class="form-control" id="dist" required>
                                    <option value="">--Select district--</option>

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
                                Type town name:<br>
                                <input type="text" name="town_n" class="form-control" id="town_n" required>
                                <button name="add_t" class="btn btn-success" id="add_t">Add</button>
                                <br>
                                <h4 id="status"></h4>



                            

                        </div>
                        <!--                        delete town-->
                        <div id="del_tow">
                            
                            <h3 id="stat"></h3>

                                <div class="form-group">

                                    <select name="district" class="form-control" id="district" required>
                                        <option value="">--Select district--</option>

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

                                <div class="form-group" >

                                    <select name="townlist" class="form-control" id="townlist" required>
                                        <option value="">--Select Town--</option>

                                    </select>


                                </div>
                                <button type="submit" class="btn btn-success" id="del">Delete</button>
                                <h4 id="status"></h4>
                            
                        </div>
                        <!-- add user                       -->
                        <div id="user_add">
                            
                            <h4 id="msg"></h4>
                                Name <br><input type="text" name="name" class="form-control" id="d_name" required><br>
                                Mobile  <br>
                                <input type="number" name="mobile" class="form-control" id="mob" required><br>
                                <div class="form-group" >
                                    <label for="sel1">Blood Group</label>
                                    <select name="blood" class="form-control" id="blood" required>
                                        <option value="">--Select Group--</option>

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

                                <div class="form-group" id="dist" >
                                    <label for="sel1">District</label>
                                    <select name="district" class="form-control" id="dist_list" required>
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
                                    <select name="townlist" class="form-control" id="town_list" required="">
                                        <option value="">--Town--</option>

                                    </select>


                                </div>
                                <button name="submit" type="submit" class="btn btn-success submit" id="add_d">Add donor</button>
                                





                            

                        </div>
                        <!--                        //delete user-->

                        <div id="user_del">
                            <br>
                            <h4 id="message"></h4>

                                Enter mobile number:<br>
                                <input list="browser" name="mobi_no" class="form-control" id="mobi">
                                <datalist id="browser">
                                    <?php
                                    $query="select ph_no,name from user";
                                    $result=mysqli_query($conn,$query);
                                    if(mysqli_num_rows($result)>0){
                                        while ($row= mysqli_fetch_assoc($result)){
                                            echo"<option value=".$row['ph_no'].">".$row['name']."</option>";
                                        }
                                    }
                                    
                                    ?>
                                </datalist>
                                <br>
                                <br>
                                


<!--                                Enter mobile number:<br>
                                <input type="number" class="form-control" id="mobi" required>-->
                                <button type="submit" id="del_d" class="btn btn-success">Delete</button>
                                <h4 id="status"></h4>
                            
                        </div>
                    </div>



                </div>









            </div>

        </div>




    </body>
</head>
</html>
