<html lang="en">
  <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> Foster Homes </title>
    
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
			<div class="col-md-2" style="font-size: 30px;color:#F2674A;"> Marketplaces of  Pets </div>
			<div class="col-md-10" style="text-align: right"> 
      <a href="home1.php"> HOME </a>
              <?php
              $location = "";
              ?>
                               
                <a href="add_vets.php" style="margin-left: 20px;"> ADD NEW VET </a>
                
                <form action="search_data.php" method="POST">
                <input type="text"  name="location">
                <input type="submit" location="submit" value="Search">
                </form>
 
				
				
			</div>
		</div>
	</section>