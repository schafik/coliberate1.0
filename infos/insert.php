<?php
/*if(empty($_POST['type'])      ||
   empty($_POST['email'])     ||
   empty($_POST['country'])     ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }*/
   echo "test";
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

/*$type = strip_tags(htmlspecialchars($_POST['type']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$country = strip_tags(htmlspecialchars($_POST['country']));*/

$sql = "INSERT INTO infos (type, email, country)
VALUES ('test', 'test', 'test')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


//header('location: index.html')
//return true;
?>