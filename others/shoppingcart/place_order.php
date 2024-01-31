<?php
// include classes
include_once "config/database.php";
include_once "objects/cart_item.php";
include "projectt/home1.php"
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// initialize objects
$cart_item = new CartItem($db);
 
// remove all cart item by user, from database
$cart_item->user_id = 1; // we default to '1' because we do not have logged in user
$cart_item->deleteByUser();
 
// set page title
$page_title = "Thank You!";
 
// include page header HTML
include_once 'layout_head.php';
 
// tell the user order has been placed
echo "<div class='col-md-12'>
    <div class='alert alert-success'>
        <strong>Your order has been placed!</strong> Thank you very much!
    </div>
</div>";
 
// include page footer HTML
include_once 'layout_foot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "C:\xampp\htdocs\projectt/home1.php" ?>
<a href="home1.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Back Home</a></body>
</html>