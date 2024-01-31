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
  <div class="container mt-5">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header bg-info">
                <h4 class="text-white">Dashboard</h4>
              </div>
              <div class="card-body">
                  <?php
                  include "dbconnect.php";

                  $query="SELECT * FROM pets ORDER BY ID DESC LIMIT 3";
                  $query_run=mysqli_query($conn,$query);



                  ?>
                  <table class="table">
                    <thead>
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
                    <tbody>
                        <?php
                            if(mysqli_num_rows($query_run)>0) //record is tehre or not
                            {
                              foreach($query_run as $row)
                              {
                                  //echo $row['id]']
                                  ?>
    
	
	
			
			<tr>
				<td><?php echo $row['Name'];?></td>
                                       <td><?php echo $row['Breed'];?></td>
                                       <td><?php echo $row['Feature'];?></td>
                                       <td><?php echo $row['Code'];?></td>
									   <td><?php echo $row['Color'];?></td>
                                       <td><?php echo $row['age'];?></td>
									   <td><?php echo $row['HelpseekerID'];?></td>
                                       
				
				<td><img src="<?php echo "uploads/".$row['Pet_image'];?>" width="100px" alt="image">
				</tr>
			
			<?php 
				}

			}
			else
			{
			  ?> 
				  <tr> 
					   <td>NO Record Available</td>
				   </tr>
			  <?php


			}
		
		?>

	</tbody>
  
  
  </table> 
</div>
</div>
</div>
</div>
</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>