<?php
// first of all, we need to connect to the database
require_once('dbconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['sid']) && isset($_POST['sname']) && isset($_POST['cls']) && isset($_POST['address'])){
	// write the query to check if this username and password exists in our database
	$u = $_POST['sid'];
	$p = $_POST['sname'];
	$c = $_POST['cls'];
	$a = $_POST['address'];
	$s = "SELECT * from volunteers where ID='$u'";
	$result = mysqli_query($conn , $s);
	if (mysqli_num_rows($result)>0){
		echo '<div class="alert alert-danger"><em>Please enter unique id!</em></div>';
		
		
	}
	else{
		
	$sql = " INSERT INTO volunteers VALUES( '$u', '$p', '$c', '$a' ) ";
  
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		//echo "Inseted Successfully";
		header("Location: show_volunteers.php");
	}
	else{
		//echo "Insertion Failed";
		header("Location: add_volunteers.php");
	}
  }	
}


?>
<html lang="en">
  <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> project </title>
    
      <!-- core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet"/>
      <link href="css/font-awesome.min.css" rel="stylesheet"/>
      <link href="css/animate.min.css" rel="stylesheet"/>
      <link href="css/main.css" rel="stylesheet"/> 
  </head>

  <body> 
    <!-- following section is used for creating the menubar in the webpage -->
	<section id="header">
		<div class="row">  
			<div class="col-md-2" style="font-size: 30px;color:#F2674A;"> project </div>
			<div class="col-md-10" style="text-align: right"> 
                <a href="home.php"> Home </a> 
				<a href="volunteers.php" style="margin-left: 20px;"> Volunteers </a> 
				<a href="helpseeker.php" style="margin-left: 20px;"> Help-seekers  </a> 
                <a href="#" style="margin-left: 20px;"> Vets  </a>
                <a href="#" style="margin-left: 20px;"> Foster-Home  </a>
                <a href="#" style="margin-left: 20px;"> Marketplace  </a>
                <a href="pets.php" style="margin-left: 20px;"> Pets  </a>
				
			</div>
		</div>
	</section>
	
	<section id = "section1">
		<div class="title"> Add a New Volunteer  </div>
		
		<form  class="form_design" method="post">
			ID: <input type="text" name="sid"> <br/>
			Name: <input type="text" name="sname"> <br/> 
			Contact: <input type="text" name="cls"> <br/>
			Address: <input type="text" name="address"> <br/>
			<br/>
			<input type="submit" value="Add to Database">
		</form>
	</section>

	
	<!----- Footer ----->
	<section id="footer"> 
	
	</section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
  </body> 
</html>

