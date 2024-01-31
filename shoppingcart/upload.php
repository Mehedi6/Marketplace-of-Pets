<?php

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'project');
 
/* Attempt to db_connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($conn === false){
    die("ERROR: Could not db_connect. " . mysqli_connect_error());
}
// Include db_connect file
session_start();
//require_once 'config/database.php';

if (isset($_POST['submit']))
{
    $id=$_POST['id'];
    $product_id=$_POST['product_id'];
    $name=$_POST['name'];
    $category=$_POST['category'];
    $quantity=$_POST['quantity'];
    $description=$_POST['description'];
    $image=$_FILES['image']['name'];
    $price=$_POST['price'];


    $query = "INSERT INTO products (name,category,quantity,description,image,price) VALUES ('$name','$category','$quantity','$description','$image','$price')";
    $query_run= mysqli_query($conn,$query);

    if($query_run)
    {
        move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/images/".$_FILES["image"]["name"]);
        $_SESSION['status']="Sucessfully stored";
        header('Location: insert.php');

    }
    else{
        $_SESSION['status']="Insert unsucessful";
        header('Location: insert.php');

    }
    $query = "UPDATE products SET product_id=id WHERE id=( SELECT MAX(id) FROM products)";
    $query_run= mysqli_query($conn,$query);

}

?>
