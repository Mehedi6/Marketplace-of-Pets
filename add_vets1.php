<html lang="en">
  <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> Vets </title>
    
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
                <a href="admin_home.php"> HOME </a> 
				<a href="show_vets1.php" style="margin-left: 20px;"> ADD VET QUALIFICATIONS </a> 

			</div>
		</div>
	</section>
	
	<section id = "section1">
		<div class="title"> Add New vet </div>
		
		<form action="insert_vets1.php" class="form_design" method="post">
			Vet ID: <br/><input type="text" name="sid"> <br/>
			Name: <br/><input type="text" name="sname"> <br/> 
            localion:<br/> <input type="text" name="cls"> <br/>
            contact no:<br/> <input type="text" name="address"> <br/>
            fees:<br/> <input type="text" name="fees"> <br/>
            Category:<br/> <input type="text" name="cat"> <br/>
            
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
