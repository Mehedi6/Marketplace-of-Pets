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
			<div class="col-md-2" style="font-size: 30px;color:#F2674A;"> Marketplaces of Pets </div>
			<div class="col-md-10" style="text-align: right"> 
            
				<a href="show_reviews.php" style="margin-left: 20px;"> </a> 

			</div>
		</div>
	</section>
	
	<section id = "section1">
		<div class="title"> ADD NEW REVIEW </div>
		
		<form action="insert_reviews.php" class="form_design" method="post">
			
			NAME: <br/><input type="text" name="sname"> <br/> 
           
      FEEDBACK: <br/><input type="text" name="address"> <br/>
            
			<br/>
			<input type="submit" value="SUBMIT">
		</form>
	</section>
  <a href="show_reviews.php" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Back</a>
	
	<!----- Footer ----->
	<section id="footer"> 
	
	</section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
  </body> 
</html>