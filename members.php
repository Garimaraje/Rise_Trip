<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>

<div class="form-group col-md-6 col-lg-6 col-sm-6">
  <h3>Choose Trip Travellers</h3>
  
  <select id="DDLActivites" data-style="btn-default" class="selectpicker form-control" multiple  data-live-search="true" >
        
		<?php
		  include('dbconnect.php');
		  $query = "select u_email from user";
		  $result = mysqli_query($conn,$query);
		  
		  // echo "<select name='u_name' multiple>";
		 
		  while ($row = mysqli_fetch_array($result)){
			  
			 echo "<option value='" . $row['u_email'] ."'>" . $row['u_email'] ."</option>";
		  }
		 // echo "</select>";
		 
		  ?>
		  	  
     </select>	 
</div>

<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
		<input type="submit" name="register-user" value="Create" class="btn btn-primary">
      </div>
    </div>
</html>