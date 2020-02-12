<!DOCTYPE html>
<html>

<head>
	<title>Update/Delete Members</title>
	<link rel="stylesheet" type="text/css" href="stylesheets/user1.css">
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
            <li><a href="additems.php">Add CDs</a></li>
            <li><a href="update.delete.php">Update/Delete CDs</a></li>
            <li><a class="active" href="admin.update.deleteMembers.php">Update/Delete Members</a></li>
		</ul>
		</div>
		
		<div class="o-container">

            <form action="includes/update_delete_member.php" method="POST" enctype="multipart/form-data">
                <input type="number" placeholder="Member ID" name="pid" id="p_id" required>
                <input type="text" placeholder="First Name" name="fname" class="pname">
                <input type="text" placeholder="Middle Name" name="mname" class="ptype">
                <input type="text" placeholder="Last Name" name="lname" class="ppackage">
                <input type="email" placeholder="Email" name="email" class="pquan">
                <input type="number" placeholder="Phone number" name="pno" class="pprice">
                <textarea type="text" placeholder="Address" name="adrs" class="area"></textarea>
                <input type="file" name="file" class="file">
                <button name="update" type="submit" class="add">Update</button>
                <button name="delete" type="submit" class="add x">Delete</button>
            </form>
	
		</div>
	</section>
	
	<!--FOOTER START-->
	
	<?php
	
		include_once 'footer.php';
	?>
	
</body>


</html>