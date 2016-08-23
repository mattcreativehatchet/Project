<?php

#ini_set("display_errors", "1");
#error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

require 'database.php';

# get email and password entered 
$email = $_REQUEST['check_email'];
$password = $_REQUEST['check_password'];

# if submit button pressed

if ($_REQUEST['action']== "loggedin")
	{
	$Authorise = new Authorise($adao);

	if ($Authorise->AuthoriseUser($email, $password))
		{
		$_SESSION['loggedin']=true;
		header('Location: home.php');
		exit;
		}

	else
		{
		$error1="* Login details are incorrect";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Below</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>

  <div class="header">
    <a href="home.php">Logo</a>
  </div>

  <h1>Login</h1>
  <p>or <a href="register.php">register here</a></p>

  <form action="login.php" method="POST">

      <input type="text" placeholder="Enter your email" name="email">
      <input type="password" placeholder="Enter your password" name="password">

      <input type="submit">

  </form>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>
