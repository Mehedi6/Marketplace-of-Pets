<html lang="en">
  <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> Forgot Password </title>
    
      <!-- core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet"/>
      <link href="css/font-awesome.min.css" rel="stylesheet"/>
      <link href="css/animate.min.css" rel="stylesheet"/>
      <link href="css/main.css" rel="stylesheet"/> 
      <link href="css/style.css" rel="stylesheet"/>
  </head>

  <body> 
  <section id="header">
		<div class="row">  
			<div class="col-md-2" style="font-size: 30px;color:#F2674A;"> Marketplaces of Pets </div>
			
		</div>
	</section>
  <style type="text/css">
    #text{
      height: 30px;
      border-radius: 7px;
      padding: 4px;
      border: solid thin  #aaa;
      color: black;
    }
    #box{
      margin: auto;
      width: 600px;
      padding: 70px;
      text align: center;
    }
    #button{
      padding: 5px;
      width: 180px;
      color: black;
      background-color: skyblue;
      border: none;
      margin-right: 400px;
      
    }
  </style>
	<section id = "section1">
    <div id="box">
        <?php
        $Msg='';
        if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }
                            ?>
      <form action="forgot_pass.php"class="form_design" method="post">
      
      <input id="text" type="text" name="phone" placeholder="Enter Your Phone No">
      

      <input id="button" name="submit" type="submit" value="Enter">
      </form>
    </div>
	</section>

	
	<!----- Footer ----->
	<section id="footer"> 
	
	</section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
  </body> 
</html>