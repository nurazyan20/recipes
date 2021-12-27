<?php
include "config.php"; // Using database connection file here

if(isset($_POST['submit']))
{		
	$name = $_POST['name'];
    $ingredient = $_POST['ingredient'];
    $step = $_POST['step'];

    $insert = mysqli_query($db,"INSERT INTO `recipes`(`name`, `ingredient`, `step`) VALUES ('$name','$ingredient', '$step')");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        header("location:list.php"); // redirects to all records page
    }
}

mysqli_close($db); // Close connection
?>

