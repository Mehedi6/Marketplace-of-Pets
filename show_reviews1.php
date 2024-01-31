<html lang="en">
  <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> Review</title>
    
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
			<div class="col-md-2" style="font-size: 30px;color:#F2674A;"> Marketplaces for Pets </div>
			<div class="col-md-10" style="text-align: right"> 
			
				<a href="admin_home.php"> HOME </a> 
				
				
			</div>
		</div>
	</section>
	<a style="margin-left: 25%" >
		<table class="table">
		<thead>
			<b><h1 style="color: black">All Reviews</h1></b>
		<tr>
		<th>NAME</th>
		<th>FEEDBACK</th>
		


		</tr>
		</thead>
	
	
	<!-- <section id = "section1">
		<div class="title"> All Reviews </div>
		<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;text-align:center;background:#66b3ff;">
			<div class="row" style="padding:5px;"> 
				<div class="col-md-3">  NAME </div>
				<div class="col-md-3">  FEEDBACK </div>
			
		
			</div>
			 -->
			<!-- here we will write php codes to fetch data from database and will show in the rows of this table -->
			
			<?php 
			require_once("dbconnect.php");
			$sql = "SELECT * FROM review";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) > 0){
				//here we will print every row that is returned by our query $sql
				while($row = mysqli_fetch_array($result)){
					?>
				<tr>
				
				<td><?php echo $row ['name'] ?></td>
				<td><?php echo $row ['feedback'] ?></td>
			
				
				
				</tr>
				<!-- //here we have to write some HTML code, so we will close php tag -->
			<!-- /* ?>
			<div class="row" style="padding:5px;"> 
				<div class="col-md-3">  <?php echo $row[0]; ?> </div>
				<div class="col-md-3">  <?php echo $row[1]; ?> </div>
		
			</div>
			 */ -->
			<?php 
				}					
			}
			?>
		</table>	
		<!-- </div>
		
		
		
		
		
	</section> -->
	
	<!----- Footer ----->
	<section id="footer"> 
			
	</section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
  </body> 
</html>