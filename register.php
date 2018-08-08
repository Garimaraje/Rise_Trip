<?php

include('dbconnect.php');
//$id = $_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$active=1;

$response=array();
$query="INSERT INTO user (u_name, u_mobile, u_email, u_password, u_status) 
  			  VALUES('$name', '$mobile', '$email', '$password','$active')";
			  
if(mysqli_query($conn, $query))
{
	/*echo mysqli_error($conn);
	$response['status']=1;
	$response['message']="User added";
	echo json_encode($response); */
        header("Location:https://localhost/project/index.php");	
}
else
{
	echo mysqli_error($conn);
	$response['status']=0;
	$response['message']="Registration Failed";
	echo json_encode($response);
  
}

?>