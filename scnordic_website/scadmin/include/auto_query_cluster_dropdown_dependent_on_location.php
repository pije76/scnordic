<?php

include ('../../../connection.php');

if(isset($_POST['location_id']))
{
 
 $location_id = $_POST['location_id'];
 
 
 $query=mysqli_query($con,"SELECT * FROM `query_location` LEFT JOIN `query_cluster` ON `query_location`.`cluster_id` = `query_cluster`. `cluster_id` LEFT JOIN `query_city` ON `query_city`.`city_id` = `query_location`. `city_id` WHERE location_id = '$location_id'");
 
 
 
 while($row_query_cluster=mysqli_fetch_array($query))
 {
  echo "<option value=". $row_query_cluster['cluster_id']. ">".$row_query_cluster['cluster_name']."</option>";
 }

}


?>
