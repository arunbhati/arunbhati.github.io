
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="bhati" >
   
    <title>Contact</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="bootstrap-3.1.1/dist/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">


  <!-- Custom styles for this template -->
  <style>
    
    body {
        padding-top: 0px;
        padding-bottom: 0px;
        background-color:#E1E1E1 ;
      }
    
    .jumbotron {

        margin-bottom: 0px;
        padding-top: 0px;
        height: 700px;
        color:black;
        background:#FFFFFF;
    }

     .container-fluid{
        color:black;
        background:#FFFFFF;
    }

      .panel1{
      margin-top: 700px;
    }

  </style>


  </head>

  <body role="document" >

   

   <div class="container theme-showcase" role="main"  style="width:1100px;background-color=white;padding-top: 0px;">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1 ><font size="5">Arun Bhati</h1>
        <p> <font size="3"> 3rd year </br> Computer Science and Engineering Student </br> IIT Guwahati 781039</p>



      <div class="navbar navbar-default" role="navigation" style="margin-top: 50px;">
        <div class="container-fluid" >
          <div class="navbar-header" >
           
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

           <ul class="nav navbar-nav">
              <li ><a href="index.html" >Blog</a></link>
              
              <li><a href="projects.html">Projects</a></li>
              <li ><a href="Arun Bhati IIT Guwahati.pdf">CV</a></li>
              <li ><a href="About Me.html">About Me</a></li>
              <li class="active" ><a href="contact.html" >Contact</a></li> 
            </ul>

          
          </div>
          
        </div><!--/.container-fluid -->
      	</div>
		<div id="panel1">
      	<p ></br> <font size="4">&nbsp; &nbsp;If you have any query about my projects or anything else feel free to contact me.</br>
		</p><br>
		<div class="container">
		<div class="row">
		<div class="col-sm-4">
		<h3></h3>
		<hr>
		<address>
		<strong>Email:</strong> <a href="mailto:#"> arnbhati@gmail.com</a><br><br>
		<strong>Phone:</strong> +91-8471879856
		</address>
		</div>
		
        <?php
        
		if (!isset($_POST["submit"]))
          {
          ?>
            	<h2>Feedback Form</h2>
		        <div class="col-sm-8 contact-form">
		        <form id="contact" method="post" class="form" role="form" action="<?php echo $_SERVER["PHP_SELF"];?>">
		        <div class="row">
		        <div class="col-xs-6 col-md-6 form-group">
		        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required autofocus />
		        </div>
		        <div class="col-xs-6 col-md-6 form-group">
		        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
		        </div>
		        </div>
		        <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
		        <br />
		        <div class="row">
		        <div class="col-xs-12 col-md-12 form-group">
		        <button class="btn btn-primary pull-right" type="submit">Submit</button>
		        </form>
          <?php 
          }
        else
          // the user has submitted the form
          echo "submitted form!!" ;  
          if (isset($_POST["name"]))
          {
            mail("arnbhati@gmail.com","it works","hi ");            
          // Check if the "from" input field is filled out
            $from = $_POST["name"]; // sender
            $subject = $_POST["subject"];
            $message = $_POST["message"];
            // message lines should not exceed 70 characters (PHP rule), so wrap it
            $message = wordwrap($message, 70);
            // send mail
            mail("arnbhati@gmail.com",$subject,$message);
            echo "Thank you for sending us feedback";
          }
          
        ?>		
	
		 
		
		</div>
		</div>
	  
	  
	   </div>		
		
		        
      </div>

  </div> <!-- /container -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bootstrap-3.1.1/dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-3.1.1/assets/js/docs.min.js"></script>
  </body>
</html>
