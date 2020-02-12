<?php

include 'config.php';



if(isset($_POST['return'])) {

    $pid = $_POST['pid'];
    $bid = $_POST['bid'];
    //$resid = "SELECT r_id FROM reserve WHERE book_id = '$pid' AND mem_id = '$bid'";
    $iprice = "SELECT price FROM product WHERE product_id = '$pid'";
    $idue = "SELECT due_date FROM reserve WHERE book_id = '$pid' AND mem_id = '$bid'";
    $jprice = $conn->query($iprice);
    $jdue = $conn->query($idue);
    $price = $jprice-> fetch_array();
    $due = $jdue-> fetch_array();
    $todays_date = date("Y-m-d");
    $today = strtotime($todays_date);
    $expiration_date = date("Y-m-d", strtotime($due['due_date']));
    $expTD = strtotime($expiration_date);
    $fprice = intval($price['price']);


    if ($expiration_date > $todays_date)
    {
        $total = $fprice ;
        $mess = "Your have to pay Rs. $total";
    }
    else
    {
        $total = $fprice + $fprice / 2;
        $mess = "You have to pay Rs. $total";
    }


    $sql = "UPDATE members SET status = 0 WHERE mem_id = '$bid'";
    $sql2 = "INSERT INTO payments (b_id, m_id, date, due, payment) VALUES ('$pid', '$bid', '$todays_date', '$expiration_date', '$total')";
    $sql1 = "DELETE FROM reserve WHERE book_id = '$pid' AND mem_id = '$bid'";

    if ( ($conn->query($sql) === TRUE) && ($conn->query($sql2) === TRUE) ) {

        echo "<script type='text/javascript'>alert('$mess');
				   window.location.href='../admin.return.php';</script>";
    }else {

        echo "Error: " . $sql . "<br>" . mysqli_error($conn);

    }

    if ( ($conn->query($sql1) === TRUE)) {


    }else {

        echo "Error: " . $sql . "<br>" . mysqli_error($conn);

    }



}

?>
