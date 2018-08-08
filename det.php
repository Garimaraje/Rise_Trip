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
<!DOCTYPE html>
<html>
<head>
<title>Xtreme Travel a Travel Agency Category Flat Bootstrap Responsive Website Template | Login :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Xtreme Travel Responsive web template,  web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/styles.css?v=1.6" rel="stylesheet">
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/scripts.js?v=1.7"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Comfortaa:400,300,700' rel='stylesheet' type='text/css'> -->
</head>
	
<body>
<!-- banner -->
	<div class="banner1">
		<div class="navigation">
			<div class="container-fluid">
				<nav class="pull">
					<ul class="nav">
						<li><a href="dash.php" class="active"> Home</a></li>
						<li><a href="cre.php"> Create Trip</a></li>
						<li><a href="index.php"> Logout</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="header-top">
			<div class="container">
				<div class="head-logo">
					<a href="index.php"><span>X</span>quisite Travel<i>Feeling Amazing Tour</i></a>
				</div>
				<div class="top-nav">
					<div class="hero fa-navicon fa-2x nav_slide_button" id="hero">
						<a href="#"><img src="images/menu.png" alt=""></a>
					</div>	
				</div>	
				
				<div class="clearfix"> </div>
			</div>
			
		</div>
		
	</div>
	<div class="sign-in">
		<div class="container">
			<div class="in-form">
				<h3>My Expense On Trip</h3>
				
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
