<?php
if (isset($_POST["status"])){
    $row['Status'] = "FOUND";
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
    <tr>
    <td><?php echo $row ['Code'] ?></td>
    <td><?php echo $row ['Name'] ?></td>
    <td><?php echo $row ['ID'] ?></td>
    <td><?php echo $row ['Status'] ?></td>
    
    
    </tr>
<?php
}

?>

		
</table>
</a>
<a href="pets.php" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Back</a>
</body>
</html>