<?php
if(!isset($_SESSION)) 
{
    session_start();
}
$loggedUser = isset($_SESSION['loggedUser']) ? $_SESSION['loggedUser'] : array();

?>
<?php
//$loggUser = isset($_SESSION['loggUser']) ? $_SESSION['loggUser'] : array();
?>

<?php

include "dbconnect.php";
$useId = $loggedUser['Id'];
$response = array();

/*echo $loggedUser['Name'];
exit();*/
?>
<html>
<head><title>Trip.com</title>
<style type="text/css">
body
   {
	   background-image:url(images/qq.jpg);
    }
</style>
</head>
<body>
      <center>
      <img src="images/aa.png" width="180px" height="75px" align="left"><br>
	  &nbsp;<br>
	  <hr>
	  <h3>HOME | <a href="create.php">CREATE TRIP</a> | <a href="index.php">LOGOUT </a> </h3>
	  <hr>
	   <marquee><h2>WELCOME TO TRIP.COM &nbsp; <?php echo $loggedUser['Name']; ?></h2></marquee>
	  <?php
	  $query="select trip.T_id, T_name, T_image FROM traveller INNER JOIN trip ON traveller.t_id=trip.T_id AND traveller.u_id='$useId';";
	  
	  $result = mysqli_query($conn,$query);
	  ?>
	  
	  <?php
	  while($row = mysqli_fetch_array($result))
	  {
       ?>
	    <h2><?php echo $row['T_name'];?></h2>
		<a href="details.php?id=<?php echo $row['T_id'] ?> "> <img src="images/<?php echo $row['T_image']; ?> "width="300px" height="180px"> </a>
	  <?php
	  }
	  ?>
	   
</body>	  
</center>
</html>