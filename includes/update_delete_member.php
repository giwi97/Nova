<?php

include 'config.php';

if(isset($_POST['update'])){

    $pid = $_POST['pid'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pno = $_POST['pno'];
    $adrs = $_POST['adrs'];

    $file = $_FILES['file'];

    if (empty($pid) || empty($fname) || empty($mname) || empty($lname) || empty($email) || empty($pno) || empty($file) || empty($adrs)) {

        $message = "Input fields!";
        echo "<script type='text/javascript'>alert('$message');
				  window.location.href='../admin.update.deleteMembers.php';</script>";
    }else {

        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png');

        if(in_array($fileActualExt, $allowed)){
            if($fileError === 0){
                if($fileSize < 1000000){
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $fileDestination = '../uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);

                    $sql = "UPDATE members SET fname='$fname', mname='$mname', lname='$lname', email='$email', phone='$pno', 
								img_location='$fileNameNew', address='$adrs' WHERE mem_id='$pid'";

                    if ( $conn->query($sql) === TRUE ) {

                        $message = "Successfully updated!";
                        echo "<script type='text/javascript'>alert('$message');
								   window.location.href='../admin.update.deleteMembers.php';</script>";
                    }else {

                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }

                }else {
                    echo "File size is higher!";
                }

            }else{
                echo "Error in uploading file!";
            }

        }else {
            echo "Invalid file type!";
        }
    }
}

if(isset($_POST['delete'])) {

    $pid = $_POST['pid'];

    $sql = "DELETE FROM members WHERE mem_id='$pid'";

    if ( $conn->query($sql) === TRUE ) {

        $message = "Successfully deleted!";
        echo "<script type='text/javascript'>alert('$message');
				   window.location.href='../admin.update.deleteMembers.php';</script>";
    }else {

        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


}

?>