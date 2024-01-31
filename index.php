
<?php
// first of all, we need to connect to the database


require('dbconnect.php');
session_start();
$msg='';
if(isset($_POST["submit"])){
	$u = $_POST['fname'];
	$p = $_POST['pass'];
	$v = $_POST['usertype'];
  
  if($_POST['fname']!="" && $_POST['pass']!=""){
    
    if ($v=="admin"){
      
      $sql = "SELECT * FROM admin WHERE id = '$u' AND password = '$p'";
      
    }
    else if($v=="seller"){
      $sql = "SELECT * FROM seller WHERE user_id = '$u' AND password = '$p'";
    }
    else{
      $sql = "SELECT * FROM users WHERE user_id = '$u' AND password = '$p'";
    }
    
    
    
    //Execute the query 
    $result = mysqli_query($conn, $sql);
    
    //check if it returns an empty set
    if(mysqli_num_rows($result)!=0){
      if (isset($_POST['rem'])){
        setcookie('usercookie',$u,time()+86400*30);
        setcookie('passwordcookie',$p,time()+86400*30);
      }
      
      if ($v=='admin'){
        
        $_SESSION['USERNAME'] = $u;
		    $_SESSION['PASSWORD'] = $p;
        $_SESSION['USERTYPE'] = $v;
        header("Location: admin_home.php");
      }
      else if($v=='seller'){
        $_SESSION['USERNAME'] = $u;
		    $_SESSION['PASSWORD'] = $p;
        $_SESSION['USERTYPE'] = $v;
        header("Location: seller.php");
      }
      else{
        $_SESSION['USERNAME'] = $u;
		    $_SESSION['PASSWORD'] = $p;
        $_SESSION['USERTYPE'] = $v;
        header("Location: home1.php");
      }
    }
    else{
      echo '<div class="alert alert-danger"><em>Wrong username/password!</em></div>';
      
      
      
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
	
    <!-- following section is used for creating the menubar in the webpage -->
	<style type="text/css">
    #text{
      height: 30px;
      border-radius: 5px;
      padding: 4px;
      border: solid thin  #aaa;
      color: black;
      background
      -color: grey;
    }
    
    #box{
      margin-left: -15%;
      margin-top: 20px;
      width: 800px;
      padding: 90px;
      background-color: transparent ;
      border-radius: 5px;
      border: bold;
      
    }
    
    #button{
      padding: 6px;
      width: 130px;
      margin-left: 1%;
      color: white;
      background-color: green;
      border: none;
      text-align: auto;
      
      
    }
    #field_error{
      background-color: lightgrey;
      margin-left: 4%;
      height: 26px;
      color: darkred;
      text-align: center;
    }
  </style>
  
	<section id = "section1">
    <div id="box">
      <a style="position: left">
      <form class="form_design" method="post">
        <input id="text" type="text"  required class="form-control" name="fname" placeholder="Your User Id" value="<?php if(isset($_COOKIE['usercookie'])){ echo $_COOKIE['usercookie']; }?>">
        <i class="far fa-envelope"> </i>
        <input id="text" type="password" name="pass" placeholder="Enter Password" value="<?php if(isset($_COOKIE['passwordcookie'])){ echo $_COOKIE['passwordcookie']; }?>">
        <i class="far fa-lock"> </i>
        <select name="usertype"> 
          <option value="admin">admin</option>
          <option value="seller">seller</option>
          <option value="user">others</option>
        </select><br/>
        <a style= "color: white"><lable><input type="checkbox" name="rem" class="nb-3" color= "white"> Remember Me </lable></a>
        
        <br><br/>
        <input id="button" type="submit" name="submit" value="Sign In"> <br/>
        <a style="size= 0.2em ; color: white;" href="forgot.php"> Forgot Password! </a> <br/>
        <a style="size= 1em ; color: white;" href="signup.php"> Don't have an account?Sign Up </a> 
        
      </form>
      </a>
      
    
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
