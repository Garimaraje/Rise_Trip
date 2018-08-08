<?php
include('dbconnect.php');
SESSION_START();
$loggedUser = $_SESSION['loggedUser'];
$useId = $loggedUser['Id'];
$tid=$_SESSION['trip_id'];

$query = "select e_name, e_amount from expenses where t_id='$tid' AND u_id='$useId'";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
 
function drawChart() {
 
    var data = google.visualization.arrayToDataTable([
      ['e_name', 'e_amount'],
      <?php
      while($row=mysqli_fetch_array($result))
	  {
          
            echo "['".$row['e_name']."', ".$row['e_amount']."],";
          
      }
      ?>
	  ]);
    
    var options = {
        title: 'My Expense chart',
        width: 900,
        height: 500,
    };
    
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    
    chart.draw(data, options);
}
</script>
</head>
<body>
    <!-- Display the pie chart -->
    <div id="piechart"></div>
</body>
</html>