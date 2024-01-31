<?php
$msg='';
    include "dbconnect.php";
    if (isset($_POST["submit"])){
        $p = $_POST['sname'];
        $q = $_POST['pass'];
        $q1 = $_POST['cpass'];
        session_start();
        $sp = $_SESSION['USERNAME'];
        if (($q == $q1) && ($sp==$p)){
            $sql = "SELECT * from users where user_id='$p' and password= '$q'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0){
                $s = "DELETE FROM users WHERE user_id='$p'";
                $result = mysqli_query($conn, $s);
                if(mysqli_affected_rows($conn)){
                  unset($_SESSION['USERNAME']);
                  unset($_SESSION['PASSWORD']);
                  
                  echo '<meta http-equiv="refresh" content="2;url=index.php">';
                  echo '<progress max=100><strong>Progress: 60%;
                      done.</strong></progress><br>';
                  echo '<span class="itext">Deleting out please wait!...</span>';
                  
                    
                }
                else{
                    echo '<div class="alert alert-danger"><em>Something went Wrong!</em></div>';
                }
            }
            else{
                echo '<div class="alert alert-danger"><em>Information did not match</em></div>';
            }
        }
        else{
          echo '<div class="alert alert-danger"><em>Password/User-id did not match</em></div>';
            
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
            <a href="home1.php" style="margin-left: 20px;"> Home  </a> 
        
			</div>
		</div>
	</section>
	
	
	<style type="text/css">
    #text{
      height: 30px;
      border-radius: 5px;
      padding: 4px;
      border: solid thin  #aaa;
      color: black;
      background-color: lightgrey;
      margin-left: 1%;
      width: 250px;
      
    }
    #box{
      margin: auto;
      margin-left: -8%;
      width: 390px;
      padding: 140px;
      background-color: transparent;
    }
    #button1{
        padding: 6px;
        width: 170px;
        margin-left: 1%;
        color: white;
        background-color: darkred;
        border: none;
        
        
      }
    #button{
      padding: 6px;
      width: 160px;
      margin-left: 1%;
      color: white;
      border: black;
      
      
    }
    #field_error{
      color: black;
      text-align: center;
    }
  </style>
  <section id = "section1">
        <div id="box">
            <form class="form_design" method="post">
                
                <input id="text" type="text" placeholder="Write Your User Id " name="sname">
                <input id="text" type="password" placeholder="Write Password " name="pass">
                <input id="text" type="password" placeholder="Confirm Your Password " name="cpass"><br><br/>
                <input id="button1" type="submit" name="submit" value="Delete Your Account!">
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
