<?php session_start(); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Insert form</title>
  </head>
  <body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="class-header">
                        <h1>Create Inventory Record</h1>
                        <h5>Please fill this form and submit to add product to inventory</h5>
                    </div>
                    <div class="card-body">
                            <?php
                            if(isset($_SESSION['status']) && $_SESSION !="")
                            {
                                ?>
                                
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Goodjob!</strong> <?php echo $_SESSION['status'] ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?php
                                unset($_SESSION['status']);

                            }
                            ?>

                        
                        <form action="upload.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Pet Id</label>
                                <input type="int" name="Pet_Id" required class="form-control" placeholder="Enter information">
                                
                            </div>
                            <div class="form-group">
                                <label>Breed</label>
                                <input type="text" name="Breed" required class="form-control" placeholder="Enter information">                               
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input type="int" name="Age" required class="form-control" placeholder="Enter information">               
                            </div>
                            <div class="form-group">
                                <label>Color</label>
                                <input type="text" name="Color" required class="form-control" placeholder="Enter information">               
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" required class="form-control">               
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="description" required class="form-control" placeholder="Enter information">
                                
                            </div>
                        
                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" name="price" required class="form-control" placeholder="Enter information">
                                
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary" > SUBMIT</button>
                                <a href="seller.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Cancel</a>
                            </div>
                        </form>
                        
                        </div>

                    </div>

            

                </div>
            </div>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>