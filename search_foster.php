<?php
   include 'header_foster.php';
   
   ?>
	
	<section id = "section1">
		<div class="title"> Foster homes </div>
		<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;text-align:center;background:#66b3ff;">
        <div class="col-md-3">  FOSTER-HOME ID </div>
	    <div class="col-md-3">  FOSTER-HOME NAME </div>
	    <div class="col-md-3">  TIME </div>
	    <div class="col-md-3">  LOCATION </div>

        <?php	
                        
              require_once("dbconnect.php");
                    $loc=$_POST['location'];
                    $sql = "SELECT  * from fosterhome where location='$loc'";
                
                    $result = mysqli_query($conn, $sql);
                    
        
            if(mysqli_num_rows($result) > 0){
				//here we will print every row that is returned by our query $sql
				while($row = mysqli_fetch_array($result)){
				//here we have to write some HTML code, so we will close php tag
			?>
			
			<div class="row" style="padding:5px;"> 
			
                <div class="col-md-3">  <?php echo $row['id']; ?> </div>
                <div class="col-md-3">  <?php echo $row['name']; ?> </div>
                <div class="col-md-3">  <?php echo $row['time']; ?> </div>
                <div class="col-md-3">  <?php echo $row['location']; ?> </div>
                

		
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
	<a href="add_fosterhomes.php" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Back</a>
	<!----- Footer ----->
	<section id="footer"> 
			
	</section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
  </body> 
</html>