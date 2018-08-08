<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style>
  .btn-pink {
    color: #fff;
    background-color: #f6358a;
    border-color: #2e6da4;
}
.center_div{
    margin: 0 auto;
    width:50% /* value of your choice which suits your alignment */
}
  </style>
</head>
<body>

<div class="container center_div">
  <h2>Add Trip Members</h2>
  <form>
  
    
     <div class="form-group">
      <label for="email">Select members Names:</label>
      
	  <?php
		  include('dbconnect.php');
		  $query = "select u_name from user";
		  $result = mysqli_query($conn,$query);
		 /* echo "
		  <div id='members'>
		  <input type=\"text\" name=\"Member_1\">
    <input type=\"button\" id=\"add_member()_\" onclick=\"addMember()\" value=\"+\" />
		  </div>";*/
		  while ($row = mysqli_fetch_array($result)){
			  
			   echo "
			   
			   <div class='checkbox'><label><input type='checkbox' name='member_name' value='".$row['u_name']."'> ".$row['u_name']."</label></div>";
		  }
		 
		  ?>
	  
      
    </div>
	
	
    <button type="submit" class="btn btn-pink">Next</button>

  </form>
</div>

</body>
</html>
