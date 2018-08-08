<!DOCTYPE html>
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
<head>
<title></title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Xtreme Travel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
<!--FlexSlider-->
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
		<script defer src="js/jquery.flexslider.js"></script>
		<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>
<!--End-slider-script-->
<!-- pop-up-script -->
<!--
<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">-->
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('.view-seventh a').Chocolat();
		});
		</script>
<!-- //pop-up-script -->
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
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
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Comfortaa:400,300,700' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- banner -->
	<div class="banner">
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
		
				
<!-- //banner -->
<!-- about-us -->
<!-- //about-us -->
<!-- about-bottom -->
	
<!--		<div class="container">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="about-bottom-grids">
								<div class="col-md-4 about-bottom-grid-left">
									
								</div>
								<div class="col-md-8 about-bottom-grid-right">
									<div class="col-md-4 about-bottom-grid-right-grid">
										<div class="about-bottom-grid-right-grid1"> -->
	<?php
	  $query="select trip.T_id, T_name, T_image FROM traveller INNER JOIN trip ON traveller.t_id=trip.T_id AND traveller.u_id='$useId';";
	  
	  $result = mysqli_query($conn,$query);
	?>
	<div class="main"> 

			<?php
				while($row = mysqli_fetch_array($result))
				{
					echo "	<div class=\"view view-seventh\">";
			?>
			
	    <h2><?php echo $row['T_name'];?></h2>
		<a href="det.php?id=<?php echo $row['T_id'] ?>" > <img src="images/<?php echo $row['T_image']; ?> "width="300px" height="180px"> </a>
	  <?php
	  echo "</div>";
	  }
	  ?>	
											
	</div>
	
<!-- //about-bottom -->
<!-- awesome -->
	
<!-- portfolio -->
	