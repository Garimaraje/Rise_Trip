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
				<h3>Add Expenses</h3>
				<p class="use">Having hands on experience in creating innovative 
								designs,I do offer design solutions which harness.</p>
				<div class="sign-in-form">
					<div class="in-form Personal">
						<form method="post" action="addexp.php">
						<!--<input type="hidden" name="Id" value="<?php echo $loggedUser['Id']; ?>">-->
		<div class="form-group">				
		 <label>Expense Name</label>
          <input name="name" class="form-control" placeholder="Expense Name" required="required" >
		  </div>
          
		  <div class="form-group">
         <label>Expense Date</label>
		  <input type="date" name="date" class="form-control" required="required" >
		  </div>
		  
         <div class="form-group">
        <label> Expense Amount</label>
          <input type="number_format" class="form-control" name="amount" placeholder="Rs" required="required" >         
		  </div>
		  <div class="form-group">
      <label>Select category:</label>
      <select name = "exp" id="DDLActivites" data-style="btn-default" class="selectpicker form-control" > 
	  <?php
		  include('dbconnect.php');
		  
		  echo mysqli_error($conn);
		  
		  $query = "select c_id,c_name from category";
		  $result = mysqli_query($conn,$query);
		 
		  while ($row = mysqli_fetch_array($result))
		  {
			  echo"<option value='".$row['c_id']."'> ".$row['c_name']."</option>";
			  
			   //echo "<div class='radio'><label><input type='radio' name='exp' value='".$row['c_id']."'> ".$row['c_name']."</label></div>";
		  }
		 
		  ?>
		</select>      
    </div>
	<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-8">
		<input type="submit" name="submit"  class="btn btn-primary">
      </div>
    </div>
	</form>
	
   

  
</div>
 
</body>
</html>
