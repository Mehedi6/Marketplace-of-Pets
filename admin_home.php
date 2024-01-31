<?php
include "dbconnect.php";
session_start();
  if(!isset($_SESSION['USERNAME']) && !isset($_SESSION['PASSWORD'])){
    header("location: index.php");
    die();
  }
// first of all, we need to connect to the database



?>
<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> admin_home </title>
    
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
	<section id="header">
		<div class="row">  
			<div class="col-md-2" style="font-size: 30px;color:#F2674A;"> Marketplaces of Pets </div>
			<div class="col-md-10" style="text-align: right"> 
        <a id="button" href="logout.php" style="margin-left=310%;">Sign out</a>
        <br><br/>
				<a href="#"> Home </a> 
				<a href="volunteers1.php" style="margin-left: 20px;"> Volunteers </a> 
				<a href="helpseeker1.php" style="margin-left: 20px;"> Help-seekers  </a> 
        <a href="Inventory_grid_view_image.php" style="margin-left: 20px;"> Products </a> 
        <a href="service_choice1.php" style="margin-left: 20px;"> Service  </a>
                <a href="join_datas1.php" style="margin-left: 20px;"> Vets  </a>
                <a href="show_fosterhomes1.php" style="margin-left: 20px;"> Foster-Home  </a>
                <a href="toycart/seller.php" style="margin-left: 20px;"> Pet Toys  </a>
                <a href="shoppingcart/seller.php" style="margin-left: 20px;"> Pet Products  </a>
                <a href="pets1.php" style="margin-left: 20px;"> Pets </a>
                <a href="show_reviews1.php" style="margin-left: 20px;"> Review </a>
                
                

			</div>
		</div>
	</section>
  
	<section id = "section1">
		<div class="title"> <p style="color: orange;margin-top: 5%;margin-bottom: 40%;"></p></div>
		
		
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

                  $query="SELECT * FROM pets ORDER BY Code DESC LIMIT 3";
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
  <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h1 class="text-center py-2"> Contact Us </h1>
                        <h3 class="text-center py-3"style="color: darkred">Email-admin@hotmail.com</h3>
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
	
	</section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
  
</body>
</html>

<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:admin_home.php?error');
       }
       else
       {    $insert = mysqli_query($conn, "INSERT INTO feedback (Name, Subject, Message) VALUES('$UserName', '$Subject', '$Msg')") ;
            if($insert){
                header("Location: admin_home.php?success");
                echo '<div class="alert alert-danger"><em>Registration Successful</em></div>';
                        }
    }
       
    }
    
?>
