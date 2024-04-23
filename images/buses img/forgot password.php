<?php
session_start();
error_reporting(0);
include('../Admin/includes/dbconnection.php');

if(isset($_POST['reset']))
  {
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $query=mysqli_query($con,"select ID from users where  Email='$email' && MobileNumber='$phone' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
        $_SESSION['vpmsaid']=$ret['ID'];
        $_SESSION['phone']=$phone;
      $_SESSION['email']=$email;
     header('location:reset.php');
    }
    else{
  
     echo "<script>alert('Invalid Email or Phone number.');</script>";
    }
  }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>User forgot Password</title>
  </head>
<body>
<style>
       @media (max-width: 626px) {
       .regform{
        margin-left: 10%;
        font-size:12px;
  
       }
     }
     @media (min-width: 626px) {
       .regform{
        margin-left: 30%;
        font-size:12px;
  
       }
     }
    </style>
    <div class="regform"  style="margin-top: 50px;margin-right: 30%;background-color: whitesmoke;width:400px;border-radius: 10px;">  
    <form   method="post" class="form" style="margin-top: 20px;">
    <h1 style="margin-left: 30%;margin-top: 0px;">Forgot Password</h1><hr style="margin-top: -10px;">
            <div style="margin-left: 5%;margin-top: 5px;font-size:20px;" >
                <label for="">Email<span style="color:red">*</span></label>
                <input class="form-control" style="width:350px;padding-left:10px;height:30px;" type="email" placeholder="Enter Email" id="password" name="email" type="email" placeholder="Email" name="email"  required>
            </div>
            <div  style="margin-left: 5%;margin-top: 5px;font-size:20px;" >
                <label for="">Mobile Number<span style="color:red">*</span></label>
                <input class="form-control"  style="width:350px;padding-left:10px;height:30px;"type="text" placeholder="Enter Mobile Number" id="password" name="phone"type="text" placeholder="Mobile Number" id="phone" name="phone"   required>
            </div>
            <div class="alternative" style="display:inline-block;font-size: 20px;">
                <li style="display: inline-block;margin-left: 35px;font-weight: bold;margin-top:5px"><a href="Registration.php">New User?</a></li>
                <li style="display: inline-block;margin-left: 35px;font-weight: bold;margin-top:5px"><a href="login.php">sign in</a></li>
            <div class="details" style="margin-left: 5%;margin-top: 5px;font-size: 20px;margin-bottom: 10px;" >
                <button  style="width:200px;height:35px;margin-left: 30%;background-color:rgb(19, 19, 243);color: white;border-radius: 5px;" type="submit" name="reset">Reset Pasword</button>
            </div>
        </form>
       </div>
</body>
</html>