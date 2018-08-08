<?php
session_start();
include('dbconnect.php');


$email= $_POST['email'];

$password= $_POST['password'];

$query = "select * from user where u_email='$email' and u_password='$password';";
/*echo $query;
exit();*/
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result);
/*print_r($result);
exit();*/

if($rows == 1)
{
	
	while($row = mysqli_fetch_array($result))
	{	/*$row['u_name'];
		exit();*/

		$loggedUser = array('Id' => $row['u_id'],
							'Name' => $row['u_name']);							
		
	}
	$_SESSION['loggedUser'] = $loggedUser;
	header("Location: dash.php");	
}
else
{
	/*echo "mehul";
	header("Location: sign-up.php");*/	
}

?>