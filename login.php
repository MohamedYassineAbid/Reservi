<?php
$con =mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"login");
if($_SERVER["REQUEST_METHOD"] == "POST") {
   
    // username and password sent from form 
    $myusername = mysqli_real_escape_string($con,$_POST['username']);
    $mypassword = mysqli_real_escape_string($con,$_POST['password']); 

    $sql = "SELECT * FROM accounts WHERE username = '$myusername' and passcode = '$mypassword'";

    $result = mysqli_query($con,$sql);      
    $row = mysqli_num_rows($result);      
    $count = mysqli_num_rows($result);

    if($count == 1) {
           echo "hello";
    } else {
       $error = "Your Login Name or Password is invalid";
    }
 }
?>