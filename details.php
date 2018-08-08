<html>
<head><title>My Expense On Trip</title>
<h2>My Expense On Trip</h2>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.btn {
    border: none;
    background-color: inherit;
    padding: 14px 28px;
    font-size: 20px;
    cursor: pointer;
    display: inline-block;
}

.btn:hover {background: #eee;}

.success {color: green;}
.info {color: dodgerblue;}
.warning {color: orange;}
.danger {color: red;}
.default {color: black;}

table, th, td {
    border: 1px solid black;
</style>
</head>
<body>

<table style="width:15%">
<?php

SESSION_START();
$loggedUser = $_SESSION['loggedUser'];
$useId = $loggedUser['Id'];
$response=array();
	$tid= $_GET['id'];
	$_SESSION['trip_id']=$tid;
	//echo $_SESSION['trip_id'];
	include("dbconnect.php")
?>
<?php
$query = "select SUM(e_amount) as sum from expenses where t_id=$tid AND u_id=$useId";

$result = mysqli_query($conn,$query);
			 if($result!='')
			 {
		       while ($row = mysqli_fetch_array($result))
			   {
				   $sum = $row['sum'];
				

 ?>
 <tr>
    <th>expense</th>
    <th><?php echo $row['sum'];?></th> 
    </tr>
 <?php
			 }
			 }
 ?>

<button class="btn success"><a href="expense.php">Add</button></a>
<button class="btn info"><a href="piechart.php">Report</button></a>

</body>
</html>
