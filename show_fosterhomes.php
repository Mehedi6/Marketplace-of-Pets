<?php
   include 'header_foster.php';
   
   ?>
	
	<a style="margin-left: 25%" >
		<table class="table">
		<thead>
			<b><h1 style="color: black">All Foster Homes List</h1></b> 
		<tr>
		<th>FOSTER-HOME ID</th>
		<th>FOSTER-HOME NAME</th>
		<th>TIME</th>
		<th>LOCATION</th>
		<th>FEES(per hour)</th>
		<th>CATEGORY</th>
		

		</tr>
		</thead>
			
			<!-- here we will write php codes to fetch data from database and will show in the rows of this table -->
			
			<?php 
			require_once("dbconnect.php");
			$sql = "SELECT * FROM fosterhome";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) > 0){
				//here we will print every row that is returned by our query $sql
				while($row = mysqli_fetch_array($result)){
				//here we have to write some HTML code, so we will close php tag
			
				?>
				<tr>
				<td><?php echo $row ['id'] ?></td>
				<td><?php echo $row ['name'] ?></td>
				<td><?php echo $row ['time'] ?></td>
				<td><?php echo $row ['location'] ?></td>
				<td><?php echo $row ['fees'] ?></td>
				<td><?php echo $row ['category'] ?></td>
				
				
				
				</tr>
			<?php 
				}					
			}
			?>
			
		</table>
	
	<!----- Footer ----->
	<section id="footer"> 
			
	</section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
  </body> 
</html>

