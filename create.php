<?php
session_start();
$loggedUser = $_SESSION['loggedUser'];

/*echo $loggedUser['Name'];
exit();*/
?>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style>
    * {
  margin: 0 auto;
  font-family: "Montserrat", sans-serif;
}
.slideshow {
  float: left;
  width: 400px;
  height: 800px;
  overflow: hidden;
  margin: 0 auto;
}

.slide-wrapper {
  width: 400px;
  height:800px;
  -webkit-animation: slide 18s ease infinite;
}

.slide {
  float: left;
  height: 800px;
  width: 500px;
}

.slide:nth-child(1) {
  background: #d93b65;
}

.slide:nth-child(2) {
  background: #037e8c;
}

.slide:nth-child(3) {
  background: #36bf66;
}

.slide:nth-child(4) {
  background: #d9d055;
}

.slide-number {
  color: #000;
  text-align: center;
  font-size: 10em;
}


.top {
  position: relative;
  top: 40px;
}
.signupbtn {
  position: relative;
  left: 250px;
  width: 100px;
  height: 40px;
  margin-left: 400px;
  border: 2px solid black;
  border-radius: 40px;
  cursor: pointer;
  font-size: 12px;
  font-weight:bold;
  background:white;
  bottom:30px;
}
small {
  float: left;
}

input[type="text"] {
  width: 200px;
  cursor: pointer;
  height: 30px;
}
.submit {
  position: relative;
  background: #f6358a;
  height: 50px;
  font-size: 20px;
  width: 200px;
  border: 0px;
  border-radius: 40px;
  top: 20px;
  color: white;
  cursor: pointer;
}


.signup {
  float: right;
  width: 80%;
  background: white;
}

    
    </style>
</head>
<body>
`<div class="signup">

  <div class="top">
      
  </div>

  <div class="middle">
    <h2>Create Trip</h2>
    
        <br>
        <form method="post" action="addtrip.php">
		
		<input type="hidden" name="Id" value="<?php echo $loggedUser['Id']; ?>">
		
          <h3><small>Trip Name</small></h3><br>
          <input type="text" name="name" placeholder="Trip Name" required="required" value "<? if (isset ($_POST ['name'])) echo $_POST['name'];?> 
          <br>
          <h3><small>Start Date</small></h3>
          <br>
		  <input type="date" name="startdate" required="required" value "<? if (isset ($_POST ['startdate'])) echo $_POST['startdate']; ?> 
          <br>
          <h3><small>End Date</small></h3>
          <br>
          <input type="date" name="enddate" required="required" value "<? if (isset ($_POST ['enddate'])) echo $_POST['enddate']; ?> 
          <br>
		  <h3><small>Trip Image</small></h3>
          <br>
          <input type="file" name="image" required="required" value "<? if (isset ($_POST ['image'])) echo $_POST['image']; ?> 
		  <br>
		  
		  <div class="form-group col-md-6 col-lg-6 col-sm-6">
           <h3><small>Trip Travellers</small></h3>
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
      </select><br>		  
		  
		  
</div>

<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
		<input type="submit" name="submit" value="Create" class="btn btn-primary">
      </div>
    </div>
	
          <br><br><br>
          
        </form>
  </div>
  
</div>
   
</body>
</html>