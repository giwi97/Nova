<?php

	include_once 'config.php';

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="stylesheets/admin_product.css">
</head>

<body>
<table id="customers">
  <tr>
    <th>Member ID</th>
    <th>Email</th>
	<th>First Name</th>
    <th>Middle Name</th>
	<th>Last Name</th>
	<th>Address</th>
	<th>Contact No</th>
  </tr>
    <?php
		$sql = "SELECT * FROM members;";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		
		if($resultCheck > 0) {
			while($row = mysqli_fetch_assoc($result)){
    ?>
   <tr>
    <td><?php echo $row['mem_id'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['fname'];?></td>
	<td><?php echo $row['mname'];?></td>
	<td><?php echo $row['lname'];?></td>
	<td><?php echo $row['address'];?></td>
	<td><?php echo $row['phone'];?></td>
  </tr>
  
  <?php } } ?>
</table>

</body>
</html>