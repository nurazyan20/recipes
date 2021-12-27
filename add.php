<?php
include "config.php"; // Using database connection file here

if(isset($_POST['submit']))
{		
    $name = $_POST['name'];
    $ingredient = $_POST['ingredient'];
	$step = $_POST['step'];

    $insert = mysqli_query($link,"INSERT INTO `recipe`(`name`, `ingredient`, 'step`) VALUES ('$name','$ingredient', '$step')");

    if($insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Records added successfully.";
    }
}

mysqli_close($link); // Close connection
?>