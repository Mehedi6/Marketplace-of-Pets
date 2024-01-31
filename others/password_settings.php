
<?php
// first of all, we need to connect to the database
//header("location: password_settings.php");
$msg='';
require_once('dbconnect.php');
if(isset($_POST["fname"]) && isset($_POST["sname"]) && isset($_POST["pass"]) && isset($_POST["submit"])){
    $u = $_POST['fname'];
    $p = $_POST['sname'];
    $q = $_POST['pass'];
    if($u!="" && $p!="" && $q!="" ){
    $s = "SELECT * from users where user_id='$u' and password= '$p'";
	$result = mysqli_query($conn , $s);
	if (mysqli_num_rows($result)>0){
        
		$sql = "UPDATE users SET password = '$q' WHERE user_id = '$u'";
	
	//Execute the query 
		$result = mysqli_query($conn, $sql);
		
		//check if this insertion is happening in the database
		if(mysqli_affected_rows($conn)){
		
		
			//echo "Inseted Successfully";
			header("Location: user_settings.php");
			die;
		}
		else{
			echo '<div class="alert alert-danger"><em>Please Enter Correct Information!</em></div>';
    }
			
		}
    else{
      echo '<div class="alert alert-danger"><em>Please Enter Correct Information!</em></div>';
      
    }
  }
  else{
    echo '<div class="alert alert-danger"><em>No Field should be empty!</em></div>';
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
        <a href="home1.php" style="margin-left: 20px;"> Home  </a>  
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
        width: 130px;
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
      color: red;
      text-align: center;
    }
  </style>
	<section id = "section1">
        <div id="box">
            <form class="form_design" method="post">
                <a style="color: black">User_Name <input id="text" type="text" name="fname">
                Current Password <input id="text" type="text" name="sname">
                New Password <input id="text" type="password" name="pass"> </a>
                <input id="button1" type="submit" name="submit" value="Change your settings">
            </form>
            <div id="field_error"> <?php echo $msg?></div>
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
