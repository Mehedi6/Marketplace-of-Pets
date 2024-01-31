<?php
// first of all, we need to connect to the database
require_once('dbconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['slocation']) && isset($_POST['time']) && isset($_POST['date'])){
	// write the query to check if this username and password exists in our database
	$u = $_POST['slocation'];
	$p = $_POST['time'];
    $a = $_POST['date'];
	

	
	$result = mysqli_query($conn,"SELECT homename FROM vetapoint WHERE homename='$u' and aptime= '$p'and apdate='$a'");
    $num_rows = mysqli_num_rows($result);

    if ($num_rows) {
        echo ("<script LANGUAGE='JavaScript'>
             window.alert('That time is already taken. Please enter a new time');
             window.location.href='add_service_vet.php';
          </script>");
		//header("Location: add_fosterhomes.php");
		//echo 'Duplicate Entry"';
		

    }
	
	else {
	$sql = " INSERT INTO vetapoint VALUES( '$u', '$p' , '$a' ) ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	
	
  
	//check if this insertion is happening in the database
	//if(mysqli_affected_rows($conn)){
	
		//echo "Inserted Successfully";
		header("Location: show_vet_successful.php");
	//}
	//else{
	    //echo "Insertion Failed";
		//header("Location: add_fosterhomes.php");
	//}
}

}