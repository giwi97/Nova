<!DOCTYPE html>
<html>

<head>
	<title>Add CDs</title>
	<link rel="stylesheet" type="text/css" href="stylesheets/user.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body> 

	<?php
		
		include_once 'header.php';
	?>

	<!--HEADER END-->
	
	<section id="main-sec">
	
		<div class="left-nav">
		<ul>
            <li><a href="admin.customer.php">Members</a></li>
            <li><a href="admin.product.php">CDs</a></li>
            <li><a href="admin.out.php">Borrowed</a></li>
            <li><a href="admin.borrow.php">Borrow a CD</a></li>
            <li><a href="admin.return.php">Return a CD</a></li>
            <li><a href="admin.newMember.php">Add New Member</a></li>
            <li><a class="active" href="additems.php">Add CDs</a></li>
            <li><a href="update.delete.php">Update/Delete CDs</a></li>
            <li><a href="admin.update.deleteMembers.php">Update/Delete Members</a></li>
		</ul>
		</div>
		
	<div class="o-container">
	
		<form action="includes/add.php" method="POST" enctype="multipart/form-data">
			<input type="text" placeholder="CD Name" name="pname" class="pname" required>
			<select name="ptype" class="ptype"required>
                <option value="Category" disabled>Category</option>
				<option value="Science Fiction">Science Fiction</option>
				<option value="Romance">Romance</option>
				<option value="Action">Action</option>
				<option value="Others">Others..</option>
			</select>
            <input type="text" placeholder="Author" name="innertype" class="ppackage" required>
			<input type="number" placeholder="Serial number" name="pquan" class="pquan" required>
			<input type="number" placeholder="Price" name="pprice" class="pprice" required>
			<textarea type="text" placeholder="Description" name="des" class="area" required></textarea>
			<input type="file" name="file" class="file" required>
			<button name="submit" type="submit" class="add">Add</button>
		</form>
	
	</div>
	</section>
	
	<!--FOOTER START-->
	
	<?php
	
		include_once 'footer.php';
	?>
	
</body>


</html>