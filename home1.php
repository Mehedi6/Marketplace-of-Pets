<?php
  session_start();
  if(!isset($_SESSION['USERNAME']) && !isset($_SESSION['PASSWORD'])){
    header("location: index.php");
  }
?>
<html lang="en">
  <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      
      <title> Home </title>
    
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
      color: white;
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
      <a href="user_account_info.php" style="margin-left: 20px;color:orange;"> Account </a>
      <br> </br> 
				<a href="home1.php"> Home </a> 
				<a href="volunteers.php" style="margin-left: 20px;"> Volunteers </a> 
				<a href="helpseeker.php" style="margin-left: 20px;"> Help-seekers  </a> 
        <a href="service_choice.php" style="margin-left: 20px;"> Service  </a>
                <a href="join_datas.php" style="margin-left: 20px;"> Vets  </a>
                <a href="show_fosterhomes.php" style="margin-left: 20px;"> Foster-Home  </a>
                <a href="pets.php" style="margin-left: 20px;"> Lost_Pets  </a>
                <a href="marketplace.php" style="margin-left: 20px;"> Marketplace  </a>
                <a href="show_reviews.php" style="margin-left: 20px;"> Reviews  </a>
                <marquee direction="scroll"><div style= "font-family: Times New Roman;font-size: 20px;color: black; width=100px;">For any kind of query, Please contact us- petsbd@gmail.com . Happy Shopping!</div></marquee>
                
			</div>
		</div>
	</section>
	
	<section id = "section1">
		<div class="title"> <p style="color: orange;margin-top: 4%;margin-bottom: 4%; padding: 13%;"></p></div>
		
</section>
        <div class="container mt-5">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header bg-info">
                <div class="center">
                <h2 class="text-black;text-allign-center">Recently Recorded Lost Pets</h2>
              </div>
              </div>
              <div class="card-body">
                  <?php
                  include "dbconnect.php";

                  $query="SELECT * FROM pets WHERE Status='LOST' ORDER BY Code DESC LIMIT 3 ";
                  $query_run=mysqli_query($conn,$query);



                  ?>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        
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
        </section>
  <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h1 class="text-center py-2"> Provide a feedback </h1>
                        
                        <hr>
                        <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <input type="text" name="UName" placeholder="User Name" class="form-control mb-2">
                            <input type="email" name="Email" placeholder="Email" class="form-control mb-2">
                            
                            <input type="text" name="Subject" placeholder="Subject" class="form-control mb-2">
                            
                            <textarea name="msg" class="form-control mb-2" placeholder="Write The Message"></textarea>
                            <button class="btn btn-success" name="btn-send"> Send </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----- Footer ----->
	<section id="footer"> 
  <!-- <h2 class="text-center py-2"style="font-family: Arial;"> Reach Us via Email </h2>
  <h3 class="text-center py-2"style="color: white">admin@hotmail.com</h3>
	</section> -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
  
</body>
</html>

<?php 
    include 'dbconnect.php';
    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:home1.php?error');
       }
       else
       {    $insert = mysqli_query($conn, "INSERT INTO feedback (Name, Subject, Message) VALUES('$UserName', '$Subject', '$Msg')");
            if($insert){
                header("Location: admin_home1.php?success");
                echo '<div class="alert alert-danger"><em>Registration Successful</em></div>';
                        }
    }
       
    }
    
?>
	
	<!----- Footer ----->
	<!-- <section id="footer"> 
	
	</section> -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
  </body> 
</html>

