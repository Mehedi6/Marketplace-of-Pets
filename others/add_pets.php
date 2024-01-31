<?php
// first of all, we need to connect to the database
require_once('dbconnect.php');
session_start();
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
	$image=$_FILES['image']['name'];
	$s = "SELECT * from pets where Code='$a'";
	$s1 = "SELECT * FROM helpseekers where HID = '$m'";
	$result5 = mysqli_query($conn , $s1);
	if (mysqli_num_rows($result5)==0){
		echo '<div class="alert alert-danger"><em>Helpseeker ID not found!</em></div>';
		
		
	}

else{
	$result = mysqli_query($conn , $s);
	if (mysqli_num_rows($result)>0){
		echo '<div class="alert alert-danger"><em>Please enter unique id!</em></div>';
		
		
	}
	else{
		
	$sql = " INSERT INTO pets (Name,Breed,Feature,Code,Color,Age,HelpseekerID,Pet_image) VALUES( '$u', '$p', '$c', '$a','$b','$d','$m','$image') ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
		move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/".$_FILES["image"]["name"]);
        $_SESSION['status']="Sucessfully stored";
		//echo "Inseted Successfully";
		header("Location: show_pets.php");
	}
	else{
		//echo "Insertion Failed";
		header("Location: add_pets.php");
	}
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
        <a href="pets.php" style="margin-left: 20px;"> Lost_Pets  </a>
				
			</div>
		</div>
	</section>
	
	<section id = "section1">
		<div class="title"> Add the description of the lost pet  </div>
		
		<form class="form_design" method="post" enctype="multipart/form-data">
      HelpseekerID: <input type="text" name="hsid"> <br/>
			Pet Name: <input type="text" name="sname"> <br/>
			Breed: <input type="text" name="bname"> <br/> 
			Feature: <input type="text" name="feature"> <br/>
		    Code: <input type="text" name="id"> <br/>
            Color: <input type="text" name="color"> <br/>
            Age: <input type="text" name="age"> <br/>
			<div class="form-group">
                <label>Image</label>
				 <input type="file" name="image" required class="form-control" >
</div>
            
		
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