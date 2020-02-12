<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="stylesheets/user2.css">
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
            <li><a class="active" href="admin.return.php">Return a CD</a></li>
            <li><a href="admin.newMember.php">Add New Member</a></li>
            <li><a href="additems.php">Add CDs</a></li>
            <li><a href="update.delete.php">Update/Delete CDs</a></li>
            <li><a href="admin.update.deleteMembers.php">Update/Delete Members</a></li>
        </ul>
    </div>

    <div class="o-container">

        <form action="includes/admin_return.php" method="POST" enctype="multipart/form-data">
            <input type="number" placeholder="CD ID" name="pid" id="p_id" required>
            <input type="number" placeholder="Borrower's ID" name="bid" id="bid" class="pquan" required>

            <button name="return" type="submit" class="add">Return</button>

        </form>
    </div>
</section>

<!--FOOTER START-->

<?php

include_once 'footer.php';
?>

</body>


</html>