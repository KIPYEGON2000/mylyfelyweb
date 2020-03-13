<?php
session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root','too','userregistration');
mysqli_select_db($con,'userregister');
$name=$_POST['user'];
$password = $_POST['password'];

$s="select * from usertable where name='$name'";

$results= mysqli_query($con,$s);

$num = mysqli_num_rows($results);
if($num == 1)
{
	echo"user name alreadsy exist";
}
else{
	$reg="insert into usertable(name,password) values('$name','$password')" ;
	mysqli_query($con,$reg);
	echo"registration succesfull";
}

?>