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
    <title>Home</title>
	<link rel="icon"  href="images/Recipes.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
	<br>
    <img src="images/Recipes.png" width="380" height="140" title="Logo" alt="Logo" />
	<p>
	
	<div class="container">
  <h5><caption-top><center>List of Recipes</caption-top></center></h5>
</div>
	

<?php 

     $conn = new mysqli('localhost', 'root', '', 'recapp');
    if(isset($_GET['search'])){
        $searchKey = $_GET['search'];
        $sql = "SELECT * FROM recipes WHERE id OR name LIKE '%$searchKey%'";
     }else
     $sql = "SELECT * FROM recipes";
     $result = $conn->query($sql);
?>

<?php

include "config.php"; // Using database connection file here

$records = mysqli_query($db,"select * from recipes"); // fetch data from database

?>

<div class="container">
<table class="table table-hover table-bordered"><br>
  <thead class="table-dark">
    <tr style="text-align:center;">
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Ingredient</th>
      <th scope="col">Step</th>
      <th scope="col">Created At</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php while( $row = $result->fetch_object() ): ?>
  <tr style="text-align:center;">
  <td><?php echo $row->id ?></td>
     <td><?php echo $row->name ?></td>
     <td><?php echo $row->ingredient ?></td>
     <td><?php echo $row->step ?></td>
     <td><?php echo $row->created_at ?></td>
      <td>
	  <a href="delete.php?id=<?php echo $row->id; ?>">
      <img src="images/delete.png" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');"></a>
	  <a href="edit.php?id=<?php echo $row->id; ?>">
      <img src="images/edit.png" title="Edit"></a>
      </td>  
    </tr>
  </tbody>
  <?php endwhile; ?>
  </tbody>
</table>
</div>
<br>
	    <a href="create.php" class="btn btn-dark">Create New Recipe</a>
		<a href="welcome.php" class="btn btn-primary">Home</a>
    </p>
</body>
</html>

