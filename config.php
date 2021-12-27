<?php

$db = mysqli_connect("localhost","root","","recapp");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>