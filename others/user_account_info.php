
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      
    
      <!-- core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet"/>
      <link href="css/font-awesome.min.css" rel="stylesheet"/>
      <link href="css/animate.min.css" rel="stylesheet"/>
      <link href="css/main.css" rel="stylesheet"/> 
      <link href="css/style.css" rel="stylesheet"/>
      
        <title>Account Settings</title>
        

      
    <style type="text/css">
        .wrapper{
            width: 650px;
            height: 420px;
            margin: 0 auto;
            color: black;
            background-color: lavender;
        }
        table tr td:last-child{
            width: 120px;
        }
        #button{
      padding: 6px;
      width: 130px;
      margin-left: 1%;
      color: black;
      background-color: grey;
      border: none;
      
      
    }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
<section id="header">
		<div class="row">  
			<div class="col-md-2" style="font-size: 30px;color:#F2674A;"> Marketplaces of Pets </div>
			<div class="col-md-10" style="text-align: right"> 
        <a id="button" href="logout.php" style="margin-left=310%;">Sign out</a>
        <br><br/>
				<a href="admin_home"> Home </a> 
				<a href="show_volunteers.php" style="margin-left: 20px;"> Volunteers </a> 
				<a href="#" style="margin-left: 20px;"> Help-seekers  </a> 
        <a href="products.php" style="margin-left: 20px;"> Products </a> 
         
                <a href="#" style="margin-left: 20px;"> Vets  </a>
                <a href="#" style="margin-left: 20px;"> Foster-Home  </a>
                <a href="#" style="margin-left: 20px;"> Marketplace  </a>
                <a href="#" style="margin-left: 20px;"> Pets </a>
                <a href="#" style="margin-left: 20px;"> Buyers </a>
                <a href="#" style="margin-left: 20px;"> Sellers  </a>
                <a href="#" style="margin-left: 20px;"> Cart  </a>
                <a href="user_account.php" style="margin-left: 20px;"> Account </a> 
                

			</div>
		</div>
	</section>
    <div class="container">
         <form action="user_settings.php" method="post">
            <button class="btn btn-default" style="float: right; margin-right: 22%; " name="edit"> Edit Your Profile</button>
        </form>
        <div class="wrapper">
                    <?php
                     include "dbconnect.php" ;
                     session_start();
                     $p = "SELECT * FROM users WHERE user_id = '$_SESSION[USERNAME]' ";
                     $result = mysqli_query($conn, $p);
                     ?>
            <h1 style="text-align: center; margin-left: 20%;">My Profile</h1>
            <div style="text-align: center;"> <b>WELCOME </b>
                <h4>
                    <?php echo $_SESSION[ 'USERNAME']; ?>
                </h4>
            </div>

            <?php
                $row = mysqli_fetch_assoc($result);
                echo "<b>";
                echo "<table class='table'>";
                echo "<table>";
                echo "<tr>";
                    echo "<td>";
                        echo "<b> Name: </b>";
                    echo "</td>";
                    echo "<td>";
                        echo $row['name'];
                    echo "</td>";
                    
                echo "</tr>";
                echo "-------------------------------------------------------------------------------------------------------------------------------";
                echo "<tr>";
                    echo "<td>";
                        echo "<b> ID: </b>";
                    echo "</td>";
                    echo "<td>";
                        echo $row['user_id'];
                    echo "</td>";
                   
                echo "</tr>";
                echo "-----------------------------------------------------------------------------------------------------------------------------";
                echo "<tr>";
                    echo "<td>";
                        echo "<b> Password: </b>";
                    echo "</td>";
                    echo "<td>";
                        echo $row['password'];
                    echo "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>";
                        echo "<b> Phone No: </b>";
                    echo "</td>";
                    echo "<td>";
                        echo $row['phone'];
                    echo "</td>";
                echo "</tr>";
                echo "</table>";
                echo "</b>";
                ?>
                
         </div>

                     
                        
                     
    </div>
    
    </body>
    </html>