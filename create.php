<!DOCTYPE html>
<html>
<head>
  <title>Create New Recipe</title>
  <link rel="icon"  href="images/Recipes.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<br><br>
<h5><caption-top><center>Create New Recipe</caption-top></center></h5></br>

<div class="container">
<div class="card">
<div class="card-header">
    Please enter recipe detail below 
  </div>
<div class="card-body">
<form action="insert.php" method="POST">
  <input type="file" name="uploadfile" value="" /><br><br>
  <label for="id" class="form-label">Recipe Name</label>
  <input type="text" name="name" class="form-control" Required>
  <br>
  <label for="id" class="form-label">Ingredient</label>
  <input type="text" name="ingredient" class="form-control" Required>
  <br>
  <label for="id" class="form-label">Step</label>
  <input type="text" name="step" class="form-control" Required>
  <br>
  <input type="submit" class="btn btn-dark" name="submit" value="Submit">
  <a href="list.php" class="btn btn-dark">Cancel</a>
  <input type="reset" class="btn btn-secondary ml-2" value="Reset">
</form>
</div>

</body>
</html>

<?php

$db = mysqli_connect("localhost","root","","recapp");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>