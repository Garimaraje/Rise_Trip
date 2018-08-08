<?php
include('dbconnect.php');
session_start();
$loggedUser = $_SESSION['loggedUser'];
$useId = $loggedUser['Id'];
$tid=$_SESSION['trip_id'];
$name=$_POST['name'];
$date=$_POST['date'];
$amount=$_POST['amount'];
$exp=$_POST['exp'];

$response=array();

$query="INSERT INTO expenses(t_id, u_id, e_name, e_date, e_amount,c_id) 
  			  VALUES('$tid', '$useId', '$name', '$date',$amount,'$exp')";
			  
			  
if(mysqli_query($conn, $query))
{
	/*echo mysqli_error($conn);
	$response['status']=1;
	$response['message']="Expese added";
	echo json_encode($response); 
        header("Location:https://localhost/project/index.php");	*/
}
else
{
	echo mysqli_error($conn);
	$response['status']=0;
	$response['message']="Expense not added";
	echo json_encode($response);
  
}

?>
