<?php
// first of all, we need to connect to the database

include "dbconnect.php";
session_start();
// we need to check if the input in the form textfields are not empty

	// write the query to check if this username and password exists in our database
if (isset($_POST['submit'])){
	if(isset($_POST['sname']) && isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['phone'])){
	$u=$_POST['sname'];
	$p = $_POST['uname'];
	$c = $_POST['password'];
	$d = $_POST['phone'];
	

	
		if($_POST['sname']!="" && $_POST['uname']!="" && $_POST['password']!="" && $_POST['phone']!=""){
			$s = "SELECT * from users where user_id='$p'";
			$result = mysqli_query($conn , $s);
			if (mysqli_num_rows($result)>0){
				echo '<div class="alert alert-danger"><em>User Already exists</em></div>';
				
			}
			
			else{
				$insert = mysqli_query($conn, "INSERT INTO users (name, user_id, password, phone) VALUES('$u', '$p', '$c', '$d')") ;
				if($insert){
	
					$message[]='Registration Successful!';
					header("Location: index.php");
          echo '<div class="alert alert-danger"><em>Registration Successful</em></div>';
				}
				else{
					$message[]='Registration Failed!';
					header("Location: signup.php");
					die();
				}
				
				
			}
		}
		else{
			echo '<div class="alert alert-danger"><em>Please Fill up the all blanks!</em></div>';
			
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
      <title> Marketplaces of Pets </title>
    
      <!-- core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet"/>
      <link href="css/font-awesome.min.css" rel="stylesheet"/>
      <link href="css/animate.min.css" rel="stylesheet"/>
      <link href="css/main.css" rel="stylesheet"/> 
      <link href="css/style.css" rel="stylesheet"/>
  </head>

  <body> 
  <section id="header">
		<div class="row">  
			<div class="col-md-2" style="font-size: 30px;color:#F2674A;"> Marketplaces of Pets </div>
			
		</div>
	</section>
  <style type="text/css">
    #text{
      height: 30px;
      border-radius: 7px;
      padding: 4px;
      border: solid thin  #aaa;
      color: black;
    }
    #box{
      margin: auto;
      width: 850px;
      padding: 70px;
      text align: center;
    }
    #button{
      padding: 5px;
      width: 100px;
      color: white;
      background-color: green;
      border: none;
      
    }
  </style>
	<section id = "section1">
    <div id="box">
      
        
      <form class="form_design" method="post">
      <input id="text" type="text" name="sname" placeholder="Enter your Name"> 
      <input id="text" type="text" name="uname" placeholder="Enter your User Id">  
      <input id="text" type="password" name="password" placeholder="Enter your Password">
      <input id="text" type="password" name="phone" placeholder="Enter your Phone No">
      

      <input id="button" name="submit" type="submit" value="Sign Up">
      </form>
    </div>
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
