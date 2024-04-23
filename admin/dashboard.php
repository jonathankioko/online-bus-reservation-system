<?php
	require_once('auth.php');
?>
<html>
<head>
<body style="background-color:green">
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
</head>
<body style="background-color:green">
	<div id="container">
		<div id="adminbar-outer" class="radius-bottom">
			<div id="adminbar" class="radius-bottom">
				
				<div id="details">
					<a class="avatar" href="javascript: void(0)">
					<img width="36" height="36" alt="avatar" src="img/avatar.jpg">
					</a>
					<div class="tcenter">
					Hello
					<strong>ADMIN</strong>
					!
					<br>
					<a class="alightred" href="../index.php">Logout</a>
					</div>
				</div>
			</div>
		</div>
		<div id="panel-outer" class="radius" style="opacity: 1;">
			<div id="panel" class="radius">
				<ul class="radius-top clearfix" id="main-menu">
					<li>
						<a class="active" href="dashboard.php">
							<img alt="Dashboard" src="img/m-dashboard.png">
							<span>Dashboard</span>
						</a>
					</li>
					
					<li>
						<a href="route.php">
							<!-- <img alt="Statistics" src="images/buses img/bus3.jpg"> -->
							<span>Bus</span>
						</a>
					</li>
					<li>
						<a href="setinventory.php">
							<!-- <img alt="Statistics" src="img/m-statistics.png"> -->
							<span>Seat Inventory</span>
						</a>
					</li>
					<li>
						<a href="report.php">
							<!-- <img alt="Statistics" src="images/buses img/bus3.jpg"> -->
							<span>Report</span>
						</a>
					</li>
					<li>
						<a href="rhistory.php">
							<!-- <img alt="Statistics" src="images/buses img/bus3.jpg"> -->
							<span>History</span>
						</a>
					</li>
					<div class="clearfix"></div>
				</ul>
				<div id="content" class="clearfix">
					<label for="filter">Filter</label> <input type="text" name="filter" value="" id="filter" />
					<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
							<tr>
								<th  style="border-left: 1px solid #C1DAD7"> Name </th>
								<th> Contact </th>
								<th> Payable </th>
								<th> Bus number</th>
								<th> customer Date </th>
								<th> Seat Number </th>
								<th> Transactionnum</th>
					
								<th> Status </th>
								<th> Action </th>
							</tr>
						</thead>
						<tbody>
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
								
									
									
									
									
									echo '<td><div align="center"><a rel="facebox" href="editstatus.php?id='.$row['id'].'">edit</a> | <a href="#" id="'.$row['transactionnum'].'" class="delbutton" title="Click To Delete">delete</a></div></td>';
									echo '</tr>';
								}
							?> 
						</tbody>
					</table>
				</div>
				
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
	<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deleteres.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
</body>
</html>