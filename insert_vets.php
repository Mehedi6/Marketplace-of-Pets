<?php
// first of all, we need to connect to the database
require_once('dbconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['sid']) && isset($_POST['sname']) && isset($_POST['cls']) && isset($_POST['address']) && isset($_POST['fees']) && isset($_POST['cat'])){
	// write the query to check if this username and password exists in our database
	$u = $_POST['sid'];
	$p = $_POST['sname'];
	$c = $_POST['cls'];
	$a = $_POST['address'];
	$x = $_POST['fees'];
	$y = $_POST['cat'];
	$result = mysqli_query($conn,"SELECT id FROM vet WHERE id='$u'");
    $num_rows = mysqli_num_rows($result);

    if ($num_rows) {
        echo ("<script LANGUAGE='JavaScript'>
             window.alert('That id is already taken.Please Enter a new id.');
             window.location.href='add_vets.php';
          </script>");
		//header("Location: add_fosterhomes.php");
		//echo 'Duplicate Entry"';
		

    }

	else{
	$sql = "INSERT INTO vet VALUES ( '$u', '$p', '$c', '$a' , '$x' , '$y') ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	//if(mysqli_affected_rows($conn)){
	
	//	echo "Inserted Successfully";
		header("Location: show_vets.php");
	//}
	//else{
	//	echo "Insertion Failed";
	//	header("Location: add_vets.php");
//	}
	
}
}

?>