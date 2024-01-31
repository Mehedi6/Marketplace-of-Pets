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
			<div class="col-md-2" style="font-size: 30px;color:#F2674A;"> Marketplaces of Pets </div></section>
			<a style="margin-left: 25%" >
		<table class="table">
		<thead>
			<b><h1 style="color: black">Volunteers List</h1></b>
		<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Contact</th>
		<th>Address</th>


		</tr>
		</thead>
	<!-- <section id = "section1">
		<div class="title"> Volunteers List </div>
		<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;text-align:center;background:#66b3ff;">
			<div class="row" style="padding:5px;"> 
				<div class="col-md-3">  ID </div>
				<div class="col-md-3">  Name </div>
				<div class="col-md-3">  Contact </div>
				<div class="col-md-3">  Address </div>
		
			</div>
			 -->
			<!-- here we will write php codes to fetch data from database and will show in the rows of this table -->
			
			<?php 
			require("dbconnect.php");
			$sql = "SELECT * FROM volunteers";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) > 0){
				//here we will print every row that is returned by our query $sql
				while($row = mysqli_fetch_array($result)){
					?>
					<tr>
					<td><?php echo $row ['ID'] ?></td>
					<td><?php echo $row ['Name'] ?></td>
					<td><?php echo $row ['Contact'] ?></td>
					<td><?php echo $row ['Address'] ?></td>
					
					
					</tr>
				<!-- //here we have to write some HTML code, so we will close php tag
			/* ?>
			<div class="row" style="padding:5px;"> 
				<div class="col-md-3">  <?php echo $row[0]; ?> </div>
				<div class="col-md-3">  <?php echo $row[1]; ?> </div>
				<div class="col-md-3">  <?php echo $row[2] ?> </div>
				<div class="col-md-3">  <?php echo $row[3] ?> </div>
			</div> */ -->
			<?php 
				}					
			}
			?>
			</table>
		<!-- </div> -->
		<a href="volunteers.php" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Back</a>
		
		
		
		
		
		
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
