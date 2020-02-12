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
        <th>Member Name</th>
        <th>CD ID</th>
        <th>CD Name</th>
        <th>Due Date</th>
        <th>Contact No</th>
        <th>Address</th>
    </tr>
    <?php
    $sql = "SELECT mem.mem_id, mem.fname ,rs.book_id, pr.product_name, rs.due_date, mem.phone, mem.address FROM members mem, reserve rs, product pr WHERE mem.mem_id = rs.mem_id AND rs.book_id = pr.product_id;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0) {
        while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row['mem_id'];?></td>
                <td><?php echo $row['fname'];?></td>
                <td><?php echo $row['book_id'];?></td>
                <td><?php echo $row['product_name'];?></td>
                <td><?php echo $row['due_date'];?></td>
                <td><?php echo $row['phone'];?></td>
                <td><?php echo $row['address'];?></td>
            </tr>

        <?php } } ?>
</table>

</body>
</html>