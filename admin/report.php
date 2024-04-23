<?php
session_start();
error_reporting(0);
include('db.php');
error_reporting(0);
if (strlen($_SESSION['vpmsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {
    $fdate=$_POST['fromdate'];
    $tdate=$_POST['todate'];
    $_SESSION['fdate']=$fdate;
    $_SESSION['tdate']=$tdate;
    echo "<script>window.location.href='rhistory.php'</script>";
  }
  ?>
<!doctype html>
<html class="no-js" lang="">
<head>
    
    <title>Reports</title>
    
</head>
<body style="background-color:green">
<style>
       @media (max-width: 626px) {
       .regform{
        margin-left: 10%;
        font-size:12px;
  
       }
     }
     @media (min-width: 626px) {
       .regform{
        margin-left: 23%;
        font-size:12px;
  
       }
     }
    </style>
   <?php include_once('index.php');?>
   <div class="regform" style="margin-top: 50px;margin-right: 30%;background-color: whitesmoke;width:400px;border-radius: 10px;">
                                <form   method="post" enctype="multipart/form-data" class="form-horizontal" >
                                <h1 style="margin-left: 20px;margin-top: 0px;">Bus reservation Report</h1><hr style="margin-top: -10px;">
                                    <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                                    <div style="margin-left: 5%;margin-top: 5px;font-size:20px;" class="row form-group">
                                        <div ><label   for="text-input" class=" form-control-label">From Date</label></div>
                                        <div ><input style="width:350px;padding-left:10px;height:30px;"  style="display: inline-flexbox;margin-left: 30px;margin: -3px;padding: 5px 5px;border-top: -1px;width: 300px;" type="date" name="fromdate" id="fromdate" class="form-control" required="true"></div>
                                    </div>
                                    <div style="margin-left: 5%;margin-top: 5px;font-size:20px;" class="row form-group">
                                        <div ><label for="email-input" class=" form-control-label">To Date</label></div>
                                        <div ><input style="width:350px;padding-left:10px;height:30px;"  style="display: inline-flexbox;margin-left: 30px;margin: -3px;padding: 5px 5px;border-top: -1px;width: 300px;"type="date" name="todate"  class="form-control" required="true"></div>
                                    </div>                                   
                                    
        <button  style="width:200px;height:30px;margin-left: 30%;background-color:rgb(19, 19, 243);color: white;border-radius: 5px;" type="submit" style="padding-bottom:10px;margin-left: 50px;
    width: 80%;
    margin-left: 30px;
    padding: 5px 5px;
    border-radius: 50px;margin-top: 5px;background-color: blue;" class="btn btn-primary btn-sm" name="submit" >Submit</button></p>
                                </form>
                            </div>
</body>
</html>
<?php }  ?>