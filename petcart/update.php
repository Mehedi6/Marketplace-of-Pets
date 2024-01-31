<?php
// Include db_connect file
require_once "db_connect.php";
 
// Define variables and initialize with empty values
$id= $breed= $price= "";
$id_err = $breed_err = $price_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["Pet_Id"]) && !empty($_POST["Pet_Id"])){
    // Get hidden input value
    $id = $_POST["Pet_Id"];
    
    // Validate name
    // $input_id = trim($_POST["Pet_Id"]);
    // if(empty($input_name)){
    //     $id_err = "Please enter Pet Id!.";
    // } elseif(!filter_var($id, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
    //     $id_err = "Please enter a valid Id!.";
    // } else{
    //     $id= $input_id;
    // }
    // $input_breed = trim($_POST["Breed"]);
    // if(empty($input_breed)){
    //     $breed_err = "Please enter the breed name!";     
    // } elseif(!ctype_digit($input_breed)){
    //     $breed_err = "Please enter valid breed name!";
    // } else{
    //     $breed= $input_breed;
    // }
    
    // Validate price price
    $input_price = trim($_POST["Price"]);
    if(empty($input_price)){
        $price_err = "Please enter an price.";     
    } else{
        $price= $input_price;
    }
    
    // Validate breed
   
    // Check input errors before inserting in database
    if(empty($price_err)){
        // Prepare an update statement
        $sql = "UPDATE pet SET Price=? WHERE Pet_Id=?";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "id", $param_price,$param_id);
            
            // Set parameters
            // $param_name = $name;
            $param_price = $price;
            // $param_breed = $breed;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: seller.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($conn);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["Pet_Id"]) && !empty(trim($_GET["Pet_Id"]))){
        // Get URL parameter
        $id =  trim($_GET["Pet_Id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM pet WHERE Pet_Id = ?";
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $price= $row["Price"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");

                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($conn);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        
        header("location: error.php");
        echo "Oops! Something went wrong. Please try again later.";
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Update Record</h2>
                    <p>Please edit the input values and submit to update the employee record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                    <div class="form-group">
                        <label>Pet ID</label>
                        <p><b><?php echo $id; ?></b></p>
                    </div>
                        <div class="form-group">
                            <label>Price</label>
                            <textarea name="Price" class="form-control <?php echo (!empty($price_err)) ? 'is-invalid' : ''; ?>"><?php echo $price; ?></textarea>
                            <span class="invalid-feedback"><?php echo $price_err;?></span>
                        </div>
                        <input type="hidden" name="Pet_Id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="seller.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>