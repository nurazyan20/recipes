<?php

require_once "config.php";

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="icon"  href="images/Recipes.png">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
	<br>
    <h5 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?> !</b> Welcome to Recipes Application..</h5>
    <img src="images/Recipes.png" width="580" height="340" title="Logo" alt="Logo" />
	<p>


<br><br>
		<a href="list.php" class="btn btn-dark">List Recipe</a>
        <a href="reset-password.php" class="btn btn-warning">Reset Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out</a>
		<a href="try.php" class="btn btn-danger ml-3">Upload</a>
    </p>
</body>
</html>

