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
			
		</div>
	</section>
	
	<!-- <section id = "section1">
		<div class="title"> Lost pet List </div>
		<div style="margin-left:5%;  margin-right:5%; margin-top:50px; margin-bottom:50px;text-align:center;background:#66b3ff;">
			<div class="row" style="padding:5px;">
			    
                <div class="col-md-1">  Name </div>
				<div class="col-md-1">  Breed </div>
				<div class="col-md-1">  Feature </div>
				<div class="col-md-1">  Code </div>
                <div class="col-md-1">  Color </div>
                <div class="col-md-1">  Age </div>
				<div class="col-md-1">  HelpseekerID </div>
				<div class="col-md-1">  Pet image </div>

			</div> -->
			<a style="margin-left: 25%" >
		<table class="table">
		<thead>
			<b><h1 style="color: black">Lost Pet List</h1></b>
		<tr>
		<th>Name</th>
		<th>Breed</th>
		<th>Feature</th>
		<th>Code</th>
		<th>Color</th>
		<th>Age</th>
		<th>HelpseekerID</th>
		<th>Pet image</th>


		</tr>
		</thead>
			<!-- here we will write php codes to fetch data from database and will show in the rows of this table -->
			
			<?php 
			require_once("dbconnect.php");
			$sql = "SELECT * FROM pets";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) > 0){
				//here we will print every row that is returned by our query $sql
				while($row = mysqli_fetch_array($result)){
				//here we have to write some HTML code, so we will close php tag
			/* ?>
			<div class="row" style="padding:5px;"> 
				<div class="col-md-1">  <?php echo $row[0]; ?> </div>
				<div class="col-md-1">  <?php echo $row[1]; ?> </div>
				<div class="col-md-1">  <?php echo $row[2] ?> </div>
				<div class="col-md-1">  <?php echo $row[3] ?> </div>
                <div class="col-md-1">  <?php echo $row[4] ?> </div>
                <div class="col-md-1">  <?php echo $row[5] ?> </div>
				<div class="col-md-1">  <?php echo $row[6] ?> </div>
				<div class="col-md-1"><img src="<?php echo "uploads/".$row['Pet_image'];?>" width="100px" alt="image"></div>
			</div>
			 */

			?>
				<tr>
				<td><?php echo $row ['Name'] ?></td>
				<td><?php echo $row ['Breed'] ?></td>
				<td><?php echo $row ['Feature'] ?></td>
				<td><?php echo $row ['Code'] ?></td>
				<td><?php echo $row ['Color'] ?></td>
				<td><?php echo $row ['age'] ?></td>
				<td><?php echo $row ['HelpseekerID'] ?></td>
				<td><img src="<?php echo "uploads/".$row['Pet_image'];?>" width="100px" alt="image"></td>
				
				
				</tr>
			<?php 
				}					
			}
			?>
			
		<!-- </div> -->
		
		
		
		</table>	
		
	<!-- </section> -->

	<a href="pets1.php" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Back</a>
	<!----- Footer ----->
	<section id="footer"> 
	
	</section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
  </body> 
</html>
