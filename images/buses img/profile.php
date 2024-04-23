<?php
session_start();
error_reporting(0);
if (strlen($_SESSION['vpmsaid']==0)) {
  header('location:logout.php');
  } else{

  }

include('../Admin/includes/dbconnection.php');
    if(isset($_POST['update'])){
    $uid=$_SESSION['vpmsaid'];
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];  
    
    $query=mysqli_query($con, "update users set FirstName='$fname', LastName='$lname', MobileNumber='$phone', Email='$email' where ID='$uid'");
    if ($query) {
    echo '<script>alert("User profile has been updated.")</script>';
  }
  else
    {
      echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }
  }
  ?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <title>User Profile</title>
    <link rel="stylesheet" href="../admin/Assets/style.css">
</head>
<?php include('index.php') ?>
<body >
<style>
       @media (max-width: 626px) {
       .regform{
        margin-left: 10%;
        font-size:12px;
        margin-top: 30%;
       }
     }
     @media (min-width: 626px) {
       .regform{
        margin-left: 23%;
        font-size:12px;
  
       }
     }
    </style>
  
    <div class="regform" style="margin-top: 5%;margin-right: 30%;background-color: whitesmoke;width:400px;border-radius: 10px;">
           
    <form  method="post" class="form" >
    <h1 style="margin-left: 30%;margin-top: 0px;">Profile Details</h1><hr style="margin-top: -10px;">
            
            <?php
$adminid=$_SESSION['vpmsaid'];
$ret=mysqli_query($con,"select * from users where ID='$adminid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)){

    ?>
                                           <div style="margin-left: 5%;margin-top: 5px;font-size:20px;">
                                            <div ><label for="text-input" class=" form-control-label" style="display: inline-block;">First Name</label></div>
                                            <div ><input  style="width:350px;padding-left:10px;height:30px;"  class=" form-control" id="adminname" name="firstname" type="text" value="<?php  echo $row['FirstName'];?>"></div>
                                          </div>
                                          <div style="margin-left: 5%;margin-top: 5px;font-size:20px;">
                                            <div ><label for="email-input" class=" form-control-label">Last Name</label></div>
                                            <div><input  style="width:350px;padding-left:10px;height:30px;"  class=" form-control" id="username" name="lastname" type="text" value="<?php  echo $row['LastName'];?>"  required='true'></div>
                                          </div>
                                           <div style="margin-left: 5%;margin-top: 5px;font-size:20px;">
                                            <div ><label for="password-input" class=" form-control-label">Contact Number</label></div>
                                            <div > <input  style="width:350px;padding-left:10px;height:30px;"  class="form-control " id="contactnumber" name="phone" type="text" value="<?php  echo $row['MobileNumber'];?>" required="true"></div>
                                          </div>
                                         <div style="margin-left: 5%;margin-top: 5px;font-size:20px;">
                                            <div ><label for="disabled-input" class=" form-control-label">Email</label></div>
                                            <div ><input  style="width:350px;padding-left:10px;height:30px;"  class="form-control " id="email" name="email" type="email" value="<?php  echo $row['Email'];?>" required="true" ></div>
                                        </div>
                                        <div style="margin-left: 5%;margin-top: 5px;font-size: 20px;margin-bottom: 10px;" >
                                            <div ><button style="width:200px;height:30px;margin-left: 20%;background-color:rgb(19, 19, 243);color: white;border-radius: 5px;" type="submit" class="btn btn-primary btn-sm" name="update" >Update</button></div>
                                        </div>
                                        <?php } ?>
                                        
        </form>
       </div>
</body>
</html>