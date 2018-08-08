<?php
session_start();
$loggedUser = $_SESSION['loggedUser'];

/*echo $loggedUser['Name'];
exit();*/
?>

<!DOCTYPE html>
<html>
<head>
<title>Xtreme Travel a Travel Agency Category Flat Bootstrap Responsive Website Template | Sign Up :: w3layouts</title>
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.min.css">
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/scripts.js?v=1.7"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>
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
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Comfortaa:400,300,700' rel='stylesheet' type='text/css'>
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
<!-- banner -->
<!-- sign-in -->
	<div class="sign-in">
		<div class="container">
			<div class="in-form">
				<h3>Create Trip</h3>
				<p class="use">Having hands on experience in creating innovative 
								designs,I do offer design solutions which harness.</p>
				<div class="sign-in-form">
					<div class="in-form Personal">
						<form method="post" action="addtrip.php">
						<input type="hidden" name="Id" value="<?php echo $loggedUser['Id']; ?>">
						
		 Trip Name
          <input type="text" name="name" placeholder="Trip Name" required="required" value "<? if (isset ($_POST ['name'])) echo $_POST['name'];?> 
          <br><br>
          Start Date
		  <input type="date" name="startdate" required="required" value "<? if (isset ($_POST ['startdate'])) echo $_POST['startdate']; ?> 
          <br><br>
          End Date
          <input type="date" name="enddate" required="required" value "<? if (isset ($_POST ['enddate'])) echo $_POST['enddate']; ?> 
          <br><br>
		  Trip Image
		  <br><br>
          <input type="file" name="image" required="required" value "<? if (isset ($_POST ['image'])) echo $_POST['image']; ?> 
		  <br>
		  
		  <div class="form-group col-md-6 col-lg-6 col-sm-6">
          Trip Members
		  <br><br>
		  <select id="DDLActivites" name="email[]" data-style="btn-default" class="selectpicker form-control" multiple  data-live-search="true" >

		<?php
		  include('dbconnect.php');
		  $query = "select u_id, u_email from user";
		  $result = mysqli_query($conn,$query);
		
		while ($row = mysqli_fetch_array($result))
			{
			?>
			<br><option value= <?php echo $row['u_id'];?>><br> <?php echo $row['u_email'];?></option><br>
      <?php 
    
		}?>
      </select>  
		  </div>

<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-8">
		<input type="submit" name="submit"  class="btn btn-primary">
      </div>
    </div>
	
          <br><br><br>
          
        </form>
  </div>
  
</div>
   
</body>
</html>