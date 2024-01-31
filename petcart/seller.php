<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> admin_home </title>
    
      <!-- core CSS -->
      <!-- <link href="css/bootstrap.min.css" rel="stylesheet"/> -->
      <link href="css/font-awesome.min.css" rel="stylesheet"/>
      <link href="css/animate.min.css" rel="stylesheet"/>
      <link href="css/main.css" rel="stylesheet"/> 
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
        button{
            padding: 6px;
            width: 130px;
            margin-left: 1%;
            color: black;
            background-color: grey;
            border: blue; 
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
        <a href="\projectt/seller.php"><div class="col-md-2" style="font-size: 30px;color:#F2674A;"> Marketplaces of Pets </div></a>
    </section>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Marketplace Products</h2>
                        <a href="insert.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Product_info</a>
                    </div>
                    <?php
                    // Include db_connect file
                    require_once "db_connect.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM pet";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Pet_Id</th>";
                                        // echo "<th>Pet_Id</th>";
                                        echo "<th>Breed</th>";
                                        echo "<th>Age</th>";
                                        echo "<th>Color</th>";
                                        echo "<th>Price</th>";
                                        //echo "<th>image</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['Pet_Id'] . "</td>";
                                        echo "<td>" . $row['Breed'] . "</td>";
                                        echo "<td>" . $row['Age'] . "</td>";
                                        echo "<td>" . $row['Color'] . "</td>";
                                        echo "<td>" . $row['Price'] . "</td>";
                                        //echo "<td>" . $row['image'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="view.php?Pet_Id='. $row['Pet_Id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a href="update.php?Pet_Id='. $row['Pet_Id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="delete.php?Pet_Id='. $row['Pet_Id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    // Close connection
                    mysqli_close($conn);
                    ?>
                </div>
            </div>        
        </div>
    </div>
    
</body>
</html>