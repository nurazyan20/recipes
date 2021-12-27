<?php
	include "config.php";
	$id=$_GET['id'];
	
	$qry = mysqli_query($db, "select * from recipes where id='$id'");
	
	$row = mysqli_fetch_array($qry); 
 
	 if(isset($_POST['update'])) // when click on Update button
	{
	$name = $_POST['name'];
    $ingredient = $_POST['ingredient'];
    $step = $_POST['step'];
	$created_at = $_POST['created_at'];
	
	$update = mysqli_query($db,"update `recipes` set name='$name', ingredient='$ingredient', step='$step', created_at='$created_at' where id='$id'");
	
	if($update)
{
    mysqli_close($db); // Close connection
    header("location:welcome.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error updating record"; // display error message if not delete
}
	}
?>