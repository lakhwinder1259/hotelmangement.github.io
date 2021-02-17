<?php
if (isset($_POST['username'])&&isset($_POST['date'])&&isset($_POST['comments']))
	{	
    $con = mysqli_connect('localhost','root','');
if(!$con)
{
	echo 'not connected';
}
if(!mysqli_select_db($con,'person'))
{
	echo 'database not selected';
}
$name = $_POST['username'];
$date = $_POST['date'];
$comments = $_POST['comments'];
$sql= "INSERT INTO data  (name,DATE,comments)  VALUES ('$name','$date','$comments')";

if(mysqli_query($con,$sql))
{
	echo json_encode(array('success' => 0));
}
else
{
	echo json_encode(array('success' => 1));
	}
	}
 else 
 {
	echo json_encode(array('success' => 2));
 }

?>