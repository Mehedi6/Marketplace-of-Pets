<?php
// first of all, we need to connect to the database
//require_once('dbconnect.php');
include 'dbconnect.php';
session_start();
// we need to check if the input in the form textfields are not empty
if(isset($_POST['sid']) && isset($_POST['sname']) && isset($_POST['location']) && isset($_POST['phone'])){
	// write the query to check if this username and password exists in our database
	$u = $_POST['sid'];
	$p = $_POST['sname'];
	$c = $_POST['location'];
	$a = $_POST['phone'];
	$k = $_POST['ISSUE'];
	
	$s = "SELECT * from helpseekers where HID='$u'";
	$result = mysqli_query($conn , $s);
	if (mysqli_num_rows($result)>0){
		echo '<div class="alert alert-danger"><em>Please enter unique id!</em></div>';
		
		
	}
	else{
		
		$sql = " INSERT INTO helpseekers VALUES( '$u', '$p', '$c', '$a' ) ";
		
		if($k == 'RESCUE'){
		$sql1 = " INSERT INTO rescue VALUES( '$u', '$p', '$c', '$a' ) ";
		$result2 = mysqli_query($conn, $sql1);
		header("Location: helpseeker.php");
		
		}
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		//echo "Inseted Successfully";
		header("Location: show_helpseekers.php");
	}
	else{
		//echo "Insertion Failed";
		header("Location: add_helpseekers.php");
	}
}
}


?>