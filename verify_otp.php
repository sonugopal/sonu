<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    

<?php

include 'connectdb.php';

if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $district = $_POST['district'];
    $town = $_POST['townlist'];
    $blood = $_POST['blood'];
    
    //start session
    session_start();
    $_SESSION['name'] = $name;
    $_SESSION['mobile'] = $mobile;
    $_SESSION['district'] = $district;
    $_SESSION['town'] = $town;
    $_SESSION['blood'] = $blood;


    


    
}
session_start();
$mobile=$_SESSION['mobile'];
$check = "select * from user where ph_no=$mobile";
    $ph_check = mysqli_query($conn, $check);
    if (mysqli_num_rows($ph_check) > 0) {
        $_SESSION['err']=1;

        header('location:reg.php');
    } 
    else
    {

        //Your authentication key
        $authKey = "150002AZFP9V8Yh58fcf044";
        

//Multiple mobiles numbers separated by comma
        $mobileNumber = $_SESSION['mobile'];

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
    

if($output!=0){
    header('location:register.php');
    
}
else
    echo 'Something went wrong..'
    . 'Try again';
    }
?>
</body>
    
</html>