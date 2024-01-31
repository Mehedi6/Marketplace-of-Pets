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
    $id=$_POST['Pet_Id'];
    $breed=$_POST['Breed'];
    $age=$_POST['Age'];
    $color=$_POST['Color'];
    $description=$_POST['description'];
    $image=$_FILES['image']['name'];
    $price=$_POST['price'];

    $result = mysqli_query($conn,"SELECT Pet_Id FROM pet WHERE Pet_Id='$id'");
    $num_rows = mysqli_num_rows($result);

    if ($num_rows) {
        echo ("<script LANGUAGE='JavaScript'>
             window.alert('That ID is already taken. Please enter a new id');
             window.location.href='insert.php';
          </script>");
		//header("Location: add_fosterhomes.php");
		//echo 'Duplicate Entry"';
    }
    $query="INSERT INTO pet (Pet_Id,Breed,Age,Color,image,description,Price) VALUES('$id','$breed','$age','$color','$image','$description','$price')";

    // $query = "INSERT INTO pet (Pet Id,Breed,Age,Color,image,description,Price) VALUES ('$id','$breed','$age','$color','$image,'$description',''$price')";
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
    $query = "UPDATE toys SET product_id=id WHERE id=( SELECT MAX(id) FROM toys)";
    $query_run= mysqli_query($conn,$query);

// }
}
?>
