
<html lang="en">
  <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> Account </title>
    
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
      background-color: skyblue;
      margin-left: 1%;
      
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
        width: 130px;
        margin-left: 1%;
        color: white;
        background-color: skyblue;
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
        <form action="account_settings.php" class="form_design" method="post">
         <input id="text" type="submit" name="submit1" value="Change your name!">
        </form>
        <form action="user_account.php" class="form_design" method="post">
         <input id="text" type="submit" name="submit1" value="User Id!">
        </form>
      
        <form action="password_settings.php" class="form_design" method="post">
         <input id="text" type="submit" name="submit1" value="Change your Password!">
      </form><br><br/><br><br/>
      <form action="delete.php" class="form_design" method="post">
         <input id="button" type="submit" name="submit1" value="Delete your Account!">
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
