<?php
include "serverconnection.php";
$q1="create database exam";
$q2=mysqli_query($conn,$q1);
if ($q2)
{
	echo "database created successfully";
}
else
{
	echo "database cannot be created";
}

?>