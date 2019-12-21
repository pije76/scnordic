<?php

include ('../../../connection.php');

if(isset($_POST['city_id']))
{
 
 $city_id = $_POST['city_id'];
 
 
 $query=mysqli_query($con,"SELECT * FROM query_location WHERE city_id = '$city_id' ORDER BY LENGTH(`loc_name`), `loc_name` ASC");
 
echo '<option value="">Select Location</option>';

 while($row_query_location=mysqli_fetch_array($query))
 {
  echo "<option value=". $row_query_location['location_id']. ">".$row_query_location['loc_name']."</option>";
 }

}


?>
