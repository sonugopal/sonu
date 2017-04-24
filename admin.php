
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
        <script src="js/admin.js" type="text/javascript"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="login.css" type="text/css">

    <body>
        <div class="container">
            <div class="row admin">
                <div class="container">
                    <div class="col-xs-12">
                        <h1>Admin Pannel</h1>
                        <br>
                        
                        
                        <button class="btn btn-primary" onclick="add_town()">Add town</button>
                            <div id="tow">
                                <form action="admin.php">
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
                                </form>
                                
                            </div>
                 
                    </div>
                    <div class="col-xs-12">
                        
                    </div>
                      
                        







                </div>

            </div>
        </div>

   

</body>
</head>
</html>
