<?php
// first of all, we need to connect to the database
require_once('dbconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['sname']) && isset($_POST['uname']) && isset($_POST['password'])){
	// write the query to check if this username and password exists in our database
	$u=$_POST['sname'];
	$p = $_POST['uname'];
	$c = $_POST['password'];
	
	
	$sql = " INSERT INTO users (user_name,user_id,password) values ( '$u', '$p', '$c' ) ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
	
		//echo "Inseted Successfully";
		header("Location: index.php");
		die;
	}
    else{
		
		echo "Insertion Failed";
		header("Location: signup.php");
	}
	
}


?>