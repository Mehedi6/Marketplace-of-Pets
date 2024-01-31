<html lang="en">
  <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> Helpseekers </title>
    
      <!-- core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet"/>
      <link href="css/font-awesome.min.css" rel="stylesheet"/>
      <link href="css/animate.min.css" rel="stylesheet"/>
      <link href="css/main.css" rel="stylesheet"/> 
  </head>

  <body> 
  <style type="text/css">
  #button{
      padding: 6px;
      width: 130px;
      margin-left: 1%;
      color: black;
      background-color: grey;
      border: none;
      
      
    }
    </style>
    <!-- following section is used for creating the menubar in the webpage -->
	<section id="header">
		<div class="row">  
         
			<div class="col-md-2" style="font-size: 30px;color:#F2674A;"> Marketplaces of Pets </div>
			<div class="col-md-10" style="text-align: right"> 
      <a id="button" href="logout.php" style="margin-left=310%;">Sign out</a>
        <br><br/> 
            <a href="home1.php" style="margin-left: 20px;"> Home  </a> 
            <a href="volunteers.php" style="margin-left: 20px;"> Volunteers </a> 
				
                <a href="#" style="margin-left: 20px;"> Vets  </a>
                <a href="#" style="margin-left: 20px;"> Foster-Home  </a>
                <a href="#" style="margin-left: 20px;"> Marketplace  </a>
                <a href="pets.php" style="margin-left: 20px;"> Lost_Pets  </a>
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
      margin-left: 0%;
      width: 390px;
      padding: 80px;
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
        <form action="add_helpseekers.php" class="form_design" method="post">
         <input id="text" type="submit" name="submit1" value="Add New Helpseeker!">
         
      </form>
        <form action="show_helpseekers.php" class="form_design" method="post">
         <input id="text" type="submit" name="submit1" value="Show Helpseekers List!">
         
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