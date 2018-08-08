<?php
session_start();
$loggedUser = $_SESSION['loggedUser'];

include('dbconnect.php');
$useId = $loggedUser['Id'];

$name=$_POST['name'];
$startdate=$_POST['startdate'];
$enddate=$_POST['enddate'];
$image=$_POST['image'];
$Id = $_POST['Id'];

$response=array();
$query="INSERT INTO trip (T_name, T_sdate, T_edate, T_image, T_creator_id) 
  			  VALUES('$name', '$startdate', '$enddate', '$image', '$Id')";
//echo $query;
//exit();
			  
if(mysqli_query($conn, $query))
{
	$last_id = mysqli_insert_id($conn);
	//echo $last_id;
	//exit();
	/*echo mysqli_error($conn);
	  $response['status']=1;
	  $response['message']="Trip added";
	echo json_encode($response);*/
    	
}
else
{
	echo mysqli_error($conn);
	$response['status']=0;
	$response['message']="Trip not added";
	echo json_encode($response);
  
}

//get the last entered id 
// mysqli_insert_id(connection)
//array.. store all selected email id
//inside for each loop of array... fire insert query..
//done..
$last_id = mysqli_insert_id($conn);
	
//echo "yaha tak aa gaya";

if(isset($_POST['submit']))
{
	//echo "hiiiiii... andar hu mai... ";
//	exit();
$x=1;
    foreach ($_POST['email'] as $select)
        {
        echo "You have selected :".$select;?><br><?php
        $x++;
		echo $x;
//for($i=0; $i==$x; $i++){
		$response1 = array();
        $que="INSERT INTO traveller (t_id, `u_id`) VALUES ('$last_id', '$select');";
		//echo $que;
		//exit();
		
if(mysqli_query($conn,$que))
{
	/*$response1['message']="TRIP CREATED";
	echo json_encode($response1);*/
    header('location:dash.php');
}
        
else
{
	$response1['status']=0;
	$response1['message']="loging Not successful";
	echo json_encode($response1);}
}

$que="INSERT INTO traveller (t_id, `u_id`) VALUES ('$last_id', '$useId');";
		
 if(mysqli_query($conn,$que))
	 {
	//$response1['message']="TRIP CREATED";
	//echo json_encode($response1);
//    header('location:exp.php');
}
        
else
{
	$response1['status']=0;
	$response1['message']="loging Not successful";
	echo json_encode($response1);
}
}

?>