<?php
include("config.php");
$id=$_REQUEST['id'];
$query = "SELECT * from recipes where id='".$id."'"; 
$result = mysqli_query($db, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Recipe</title>
	<link rel="icon"  href="images/Recipes.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align:""; }
    </style>
</head>

<body>
    <p>
	
	<div class="container"><br><br>
  <h5><caption-top><center>Edit Recipe</caption-top></center></h5><br>
</div>

<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
	$id=$_REQUEST['id'];
	$name =$_REQUEST['name'];
	$ingredient =$_REQUEST['ingredient'];
	$step = $_REQUEST["step"];
	$created_at = $_REQUEST["created_at"];
	$update="update recipes set name='".$name."', ingredient='".$ingredient."', step='".$step."', created_at='".$created_at."' where id='".$id."'";
	mysqli_query($db, $update) or die(mysqli_error());
	if($update)
	{
		mysqli_close($db); // Close connection
		header("location:list.php"); // redirects to all records page
		exit;	
	}
	else
	{
		echo "Error updating record"; // display error message if not delete
	}
	$status = "Record Updated Successfully. </br></br>
	<a href='list.php'>View Updated Record</a>";
	echo '<p style="color:#FF0000;">'.$status.'</p>';
	}else {
?>
<div class="container">
<div class="card">
<div class="card-header">
    You can edit recipes detail below
 </div>
 <div class="card-body">
<form name="form" method="post" action=""> 
	<input type="hidden" name="new" value="1" />
	<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
	<p><label for="id" class="form-label">Id</label>
	<input type="text" name="id" class="form-control" required value="<?php echo $row['id'];?>" /></p>
	<p><label for="id" class="form-label">Name</label>
	<input type="text" name="name" class="form-control" required value="<?php echo $row['name'];?>" /></p>
	<p><label for="id" class="form-label">Ingredient</label> 
	<input type="text" name="ingredient" class="form-control" required value="<?php echo $row['ingredient'];?>" /></p>
	<p><label for="id" class="form-label">Step</label> 
	<input type="text" name="step" class="form-control" required value="<?php echo $row['step'];?>" /></p>
	<p><label for="id" class="form-label">Created At</label> 
	<input type="text" name="created_at" class="form-control" required value="<?php echo $row['created_at'];?>" /></p>
	<p><input name="submit" type="submit" class="btn btn-dark" value="Update" />
	<a href="list.php" class="btn btn-secondary" role="button">Back</a></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>