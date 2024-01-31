<?php
   include 'header1.php';
   
   ?>
	
	<!-- <section id = "section1">
		<div class="title"> All Vets Information  List </div>
		<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;text-align:center;background:#66b3ff;">
			<div class="row" style="padding:5px;"> 
			<div class="row" style="padding:5px;"> 
			
				<div class="col-md-3">  NAME </div>
                <div class="col-md-3">  LOCATION</div>
				<div class="col-md-3">  CONTACT </div>
                <div class="col-md-3">  QUALIFICATIONS </div>
 
			</div>
			 -->
			<!-- here we will write php codes to fetch data from database and will show in the rows of this table -->
			<section id = "section1">
		<div class="title"> All Vets Information  List </div>
		<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;text-align:center;background:#66b3ff;">
			
			</div>
			</section>
			<a style="margin-left: 25%" >
			<table class="table">
			<thead>
				<b><h1 style="color: black">All Vets List</h1></b>
			<tr>
			<th>NAME</th>
			<th>LOCATION</th>
			<th>CONTACT</th>
			<th>FEES</th>
			<th>CATEGORY</th>
			<th>QUALIFICATIONS</th>
			

		</tr>
		</thead>
			<?php 

               
               
			require_once("dbconnect.php");

			
			//$sqll = "create table result as (SELECT  v.*,vq.qualification from vet v, vet_qualification vq where v.id=vq.id)";
            //$result = mysqli_query($conn, $sqll);
			
			$sql = "SELECT  v.*,vq.qualification from vet v, vet_qualification vq where v.id=vq.id";
            
			$result = mysqli_query($conn, $sql);
           
			if(mysqli_num_rows($result) > 0){
				//here we will print every row that is returned by our query $sql
				while($row = mysqli_fetch_array($result)){
				//here we have to write some HTML code, so we will close php tag
			/* ?>
			<div class="row" style="padding:5px;"> 
				
				<div class="col-md-3">  <?php echo $row['name']; ?> </div>
                <div class="col-md-3">  <?php echo $row['location']; ?> </div>
                <div class="col-md-3">  <?php echo $row['contact']; ?> </div>
                <div class="col-md-3">  <?php echo $row['qualification']; ?> </div>
	
			</div> */
			?>
			<tr>
			
			<td><?php echo $row ['name'] ?></td>
			<td><?php echo $row ['location'] ?></td>
			<td><?php echo $row ['contact'] ?></td>
			<td><?php echo $row ['fees'] ?></td>
			<td><?php echo $row ['category'] ?></td>
			<td><?php echo $row ['qualification'] ?></td>
			
			
			
			</tr>
			<?php 
				}					
			}
			?>

		</table>
            
			
	<!-- 	</div>
     
       
		
		
		
		
		
	</section> -->
	<a href="add_vets.php" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Back</a>
	<!----- Footer ----->
	<section id="footer"> 
			
	</section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
  </body> 
</html>