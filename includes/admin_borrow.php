<?php

include 'config.php';



if(isset($_POST['update'])) {

    $pid = $_POST['pid'];
    $bid = $_POST['bid'];
    $dt = date("Y-m-d");
    $due = strtotime("+14 Days");
    $dd = date("Y-m-d", $due);

    $sql = "UPDATE members SET status = 1 WHERE mem_id = '$bid'";
    $sql1 = "INSERT INTO reserve(book_id, mem_id, r_date, due_date) VALUES ('$pid', '$bid', '$dt', '$dd')";

    if ( ($conn->query($sql) === TRUE) && ($conn->query($sql1) === TRUE) ) {

        $message = "Successfully submitted!";
        echo "<script type='text/javascript'>alert('$message');
				   window.location.href='../admin.borrow.php';</script>";
    }else {

        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
    }


}

?>