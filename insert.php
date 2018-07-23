<?php

if(empty($_POST['nameType'])      ||
   empty($_POST['email'])     ||
   empty($_POST['country'])     ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   echo "<br><a href='http://coliberate.adaweb.ma/'>return to website</a>";
   return false;
   }
$servername = "localhost";
$username = "adawebma_coliberate";
$password = "P@ssw0rd";
$dbname = "adawebma_coliberate";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$type = strip_tags(htmlspecialchars($_POST['nameType']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$country = strip_tags(htmlspecialchars($_POST['country']));

$sql = "INSERT INTO infos (type, email, country)
VALUES ('$type', '$email', '$country')";


//header('Location: http://coliberate.adaweb.ma/');
//return true;header('Location: http://www.example.com/');
?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CoLiberate</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body class="other-pages">

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-black fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">CoLiberate</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="swipe.html">Swipe</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header>
      <div class="yellow-block">
      	<h1 class="pt-5">Coliberate</h1>
      </div>
    </header>
	<div class="container" style="min-height:350px;">
      <div class="row">
        <!-- Form Column -->
<?php if ($conn->query($sql) === TRUE) {
?>
		<div class="alert alert-success col-md-12 text-center" role="alert">
			We appreciate your interest in CoLiberate! <br>
			One of our colleagues will be in touch with you shortly.
		</div>
<?php
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
?>
		<div class="alert alert-danger col-md-12 text-center" role="alert">
		  Problem !
		</div>
<?php
}
$conn->close();
?>


      </div>
  	</div>

    <!-- Footer -->
    <footer class="py-5 bg-black">
      <div class="container">
        <p class="m-0 text-center text-white">local fabrication, global collaboration.</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script>
    	$(document).ready(function(){
	      setTimeout(function() {
	       window.location.href = "http://coliberate.adaweb.ma/";
	      }, 5000);
	    });
	</script>
  </body>

</html>

