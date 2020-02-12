<!DOCTYPE html>
<html>

<head>
	<title></title>
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
            <li><a class="active" href="admin.newMember.php">Add New Member</a></li>
            <li><a href="additems.php">Add CDs</a></li>
            <li><a href="update.delete.php">Update/Delete CDs</a></li>
            <li><a href="admin.update.deleteMembers.php">Update/Delete Members</a></li>
		</ul>
		</div>
		
		<div class="o-container">
            <form action="includes/admin_newMember.php" method="POST" enctype="multipart/form-data">
                <input type="text" placeholder="First name" name="fname" class="pname" required>
                <input type="text" placeholder="Middle name" name="mname" class="ptype" required>
                <input type="text" placeholder="First name" name="lname" class="ppackage" required>
                <input type="email" placeholder="Email" name="email" class="pquan" required>
                <input type="number" placeholder="Phone number" name="pno" class="pprice" required>
                <textarea type="text" placeholder="Address" name="adrs" class="area" required></textarea>
                <input type="file" name="file" class="file" required>
                <button name="submit" type="submit" class="add">Add member</button>
            </form>
		</div>

	</section>
	
	<!--FOOTER START-->
	
	<?php
	
		include_once 'footer.php';
	?>
	
</body>


</html>