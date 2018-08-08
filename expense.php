
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
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

<form method="post" action="addexp.php">
<div class="container center_div">
  <h3>Add Expenses</h3>
  <br> 
		
		  <label>Expense Name</label><br>
          <input type="text" name="name" placeholder="Expense Name">
		  <br> <br>
		  <label>Expense Date</label><br>
		  <input type="date" name="date" placeholder="">
		  <br> <br>
		  <label>Expense Amount</label><br>
          <input type="number_format" name="amount" placeholder="Rs">
		  <br> <br>
    
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
	<button type="submit"class="btn btn-primary">Add</button>
	</form>
	
   

  
</div>
 
</body>
</html>
