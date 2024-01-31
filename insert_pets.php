<?php
// first of all, we need to connect to the database
require_once('dbconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['sname']) && isset($_POST['bname']) && isset($_POST['feature']) && isset($_POST['id']) && isset($_POST['color']) && isset($_POST['age']) && isset($_POST['hsid'])){
	// write the query to check if this username and password exists in our database
	
	$u = $_POST['sname'];
	$p = $_POST['bname'];
	$c = $_POST['feature'];
	$a = $_POST['id'];
    $b = $_POST['color'];
    $d = $_POST['age'];
	$m = $_POST['hsid'];
	
	$sql = " INSERT INTO pets (Name,Breed,Feature,Code,Color,Age,HelpseekerID) VALUES( '$u', '$p', '$c', '$a','$b','$d','$m') ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		//echo "Inseted Successfully";
		header("Location: show_pets.php");
	}
	else{
		//echo "Insertion Failed";
		header("Location: add_pets.php");
	}
	
}


?>