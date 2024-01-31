<?php
require_once "dbconnect.php";
if (isset($_GET["Code"])){
    $code=$_GET['Code'];
    // $found=$_POST['button'];
    $sql="UPDATE pets SET Status='Found' WHERE Code=$code";
    $result = mysqli_query($conn, $sql);
    if(mysqli_affected_rows($conn)){
        echo '<progress max=100><strong>Progress: 60%;
        done.</strong></progress><br>';
        echo '<div class="alert alert-danger"><em>Succesfully!</em></div>';
        header("Location: L&F1.php");
        die;
      }
      else{
        echo '<div class="alert alert-danger"><em>Something Went Wrong!</em></div>';
      }
    }


?>
<html lang="en">
  <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> Helpseekers </title>
    
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
			
	</section>

<a style="margin-left: 25%" >
<table class="table">
<thead>
    <b><h1 style="color: black">LOST & FOUND</h1></b>
<tr>
<th>Code</th>
<th>Name</th>
<th>Volunteer ID</th>
<th>Status</th>
<th>Action</th>


</tr>
</thead>
<?php
require('dbconnect.php');
//$connect=mysqli_connect("localhost","root","","project") or die("connection failed");
$query="SELECT pets.Code,pets.Name,volunteers.ID,pets.Status FROM ((helpseekers INNER JOIN pets ON pets.HelpseekerID = helpseekers.HID) INNER JOIN volunteers ON helpseekers.Location = volunteers.Address); ";
$result=mysqli_query($conn, $query);

while($row=mysqli_fetch_assoc($result))
{

    ?>
    <form method="post">
    <tr>
    <td><?php echo $row ['Code'] ?></td>
    <td><?php echo $row ['Name'] ?></td>
    <td><?php echo $row ['ID'] ?></td>
    <td><?php echo $row ['Status'] ?></td>

    <td>
    <a href="L&F1.php?Code=<?php echo $row['Code']?>". class="btn btn-success" role="button" aria-pressed="true">Found </a> 


    </td>
    </tr>
    </form>
<?php
}

?>

		
</table>
</a>
<a href="pets1.php" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Back</a>
</body>
</html>