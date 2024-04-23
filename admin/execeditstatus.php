<?php
	include('../db.php');
	$roomid = $_POST['roomid'];
	$status=$_POST['status'];
	mysqli_query($conn,"UPDATE reservedetails SET status='$status' WHERE id='$roomid'");
	header("location: dashboard.php");
?>