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
			<div class="col-md-2" style="font-size: 30px;color:#F2674A;">Marketplaces of Pets</div>
			<div class="col-md-10" style="text-align: right"> 
        <a href="home1.php"> HOME </a> 
				<a href="show_fosterhomes.php" style="margin-left: 20px;"> </a> 
			
				
			</div>
		</div>
	</section>
	
	<section id = "section1">
		<div class="title"> Add New fosterhomes </div>
    
   
		<form style="text-align: center;" action="insert_fosterhomes.php" class="form_design" method="post">
      FOSTER-HOME ID: <br/><input type="text" name="sid"> <br/>
			FOSTER-HOME NAME:<br/> <input type="text" name="sname"> <br/> 
      TIME: <br/><input type="text" name="cls"> <br/>
      ADDRESS:<br/> <input type="text" name="address"> <br/>
      FEES:<br/> <input type="text" name="fees"> <br/>
      CATEGORY:<br/> <input type="text" name="cat"> <br/>

 
            
			<br/>
			<input type="submit" style="text-align: center;" value="SUBMIT">
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
