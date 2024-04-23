<?php
session_start();
error_reporting(0);
include('db.php');
if (strlen($_SESSION['vpmsaid']==0)) {
  header('location:logout.php');
  }

  ?>
<!doctype html>

<html class="no-js" lang="">
<head>
   
    <title>Users</title>
    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="Assets/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<style>
       @media (max-width: 626px) {
       .content{
        margin-left: 0%;
        font-size:12px;
        width:600px;
        margin-top: 8%;"
       }
     }
     @media (min-width: 626px) {
       .content{
        margin-left: 24%;
        font-size:12px;
        width:750px;
        margin-top: 6%;
       }
     }
    </style>
<?php include_once('index.php');?>
        <div class="content" style="background-color: aliceblue;margin-right: 24%;" >
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-lg-12" style="diplay:inline-block;">
                    <div class="card" >
                        <div class="card-body" id="example">
                            <?php

                                $fdate=$_SESSION['fdate'];
                                $tdate= $_SESSION['tdate'];  
                                $unique=$_SESSION['unique'];  
                            ?>
<h5 align="center" style="color:black;font-size:20px;padding-left: 10px;">Bus reservation Report from <?php echo $fdate?> to <?php echo $tdate?></h5>
                             <table  style="color:black;font-size:14px;width:700px;" class="table">
                <thead style="color:black;font-size:16px;padding-left: 10px;">
                                        <tr>
                                            <tr>
                  <th>Ticket Number</th>
                  <th>Name</th>
                    <th>Contact</th>
                    <th>From-To</th>
                    <th>Payable</th>
                    <th>Seat Number</th>
                    <th>Date of travel</th>
                    <th>Route and type of bus </th>
                    <th>Bus Departure time</th>
                   
                                        </tr>
                                        </tr>
                                        </thead>
               
<?php
include('../db.php');
$result = mysqli_query($conn,"SELECT * FROM reservedetails");
while($row = mysqli_fetch_array($result))
  {
    echo '<tr class="record">';
    echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['fname'].'</td>';
    echo '<td><div align="right">'.$row['contact'].'</div></td>';
    echo '<td><div align="right">'.$row['payable'].'</div></td>';
    echo '<td><div align="right">'.$row['bus'].'</div></td>';

    echo '<td><div align="right">'.$row['date'].'</div></td>';
    echo '<td><div align="right">'.$row['setnumber'].'</div></td>';
    echo '<td><div align="right">'.$row['transactionnum'].'</div></td>';
    echo '<td><div align="right">'.$row['status'].'</div></td>';
    $rrad=$row['bus'];
}?>
              </table>
              
                    </div>
 <button style="width:200px;height:30px;margin-left: 30%;background-color:rgb(19, 19, 243);color: white;border-radius: 5px;" align="center"  onclick="CallPrint()">Print</button>
                </div>
               
            </div>
        </div>
       
        
    </div>
<script >
function CallPrint(strid) {
var prtContent = document.getElementById("example");
var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
WinPrint.document.write(prtContent.innerHTML);
WinPrint.document.close();
WinPrint.print();
WinPrint.close();
}
</script> 

</body>
</html>
<?php   ?>