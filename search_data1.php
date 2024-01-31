<?php
   include 'header1.php';
   
   ?>
	
	<section id = "section1">
		<div class="title"> Vets Information </div>
		<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;text-align:center;background:#66b3ff;">

        <?php	
                        
              require_once("dbconnect.php");
                    $loc=$_POST['location'];
                    $sql = "SELECT  * from vet where location='$loc'";
                
                    $result = mysqli_query($conn, $sql);
                    
        
            if(mysqli_num_rows($result) > 0){
				//here we will print every row that is returned by our query $sql
				while($row = mysqli_fetch_array($result)){
				//here we have to write some HTML code, so we will close php tag
			?>
			
			<div class="row" style="padding:5px;"> 
			
                <div class="col-md-3">  <?php echo $row['name']; ?> </div>
                <div class="col-md-3">  <?php echo $row['location']; ?> </div>
                <div class="col-md-3">  <?php echo $row['contact']; ?> </div>
                

		
			</div>
			
			<!-- here we will write php codes to fetch data from database and will show in the rows of this table -->
            <?php 
				}					
			}
			?>
			

               
               
	
			<div> 
				
            
	
			</div>
			
		
			
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