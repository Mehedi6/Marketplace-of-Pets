
<?php
// first of all, we need to connect to the database

require('dbconnect.php');
if(isset($_POST["fname1"]) && isset($_POST["fname2"]) && isset($_POST["sname"]) && isset($_POST["pass"]) && isset($_POST["submit"])){
    $u = $_POST['fname1'];
    $v = $_POST['fname2'];
    $p = $_POST['sname'];
    $q = $_POST['pass'];
    if($u!="" && $v!="" && $p!="" && $q!=""){
      $s = "SELECT * from users where user_id='$u' and Name='$v' and password= '$q'";
    $result = mysqli_query($conn , $s);
    if (mysqli_num_rows($result)>0){
          
      $sql = "UPDATE users SET Name = '$p' WHERE user_id = '$u'";
    
    //Execute the query 
      $result = mysqli_query($conn, $sql);
      
      //check if this insertion is happening in the database
      if(mysqli_affected_rows($conn)){
      
        echo '<div class="alert alert-danger"><em>Name changed Succesfully!</em></div>';
        header("Location: user_settings.php");
        die;
      }
      else{
        echo '<div class="alert alert-danger"><em>Something Went Wrong!</em></div>';
      }
    }
    else{
      echo '<div class="alert alert-danger"><em>Please Enter Correct Information!</em></div>';
      }
    }
    else{
      echo '<div class="alert alert-danger"><em>No Empty Field Acceptable!</em></div>';
    }
  }
        
?>

<html lang="en">
  <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> Home </title>
    
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
			<div class="col-md-2" style="font-size: 30px;color:#F2674A;"> Marketplaces of Pets </div>
			<div class="col-md-10" style="text-align: right">  
        
			</div>
		</div>
	</section>
	
	
	<style type="text/css">
    #text{
      height: 30px;
      border-radius: 5px;
      width: 250px;
      padding: 4px;
      border: solid thin  #aaa;
      color: black;
      background-color: transparent;
      margin-left: 1%;
      text-align: left;
      
    }
    #box{
      margin: auto;
      margin-left: 0%;
      width: 490px;
      padding: 80px;
      background-color: lightgrey;
    }
    #button1{
        padding: 6px;
        width: 170px;
        margin-left: 1%;
        color: white;
        background-color: skyblue;
        border: none;
        
        
      }
    #button{
      padding: 6px;
      width: 130px;
      margin-left: 1%;
      color: white;
      
      border: none;
      
      
    }
    #field_error{
      color: black;
      text-align: center;
    }
  </style>
	<section id = "section1">
        <div id="box">
            <form class="form_design" method="post">
                <input id="text" type="text" placeholder="Your User ID " name="fname1">
                <input id="text" type="text" placeholder="Current Name " name="fname2">
                <input id="text" type="text" placeholder="New Name " name="sname">
                <input id="text" type="password" placeholder="Password " name="pass">
                <input id="button1" type="submit" name="submit" value="Change your settings">
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
