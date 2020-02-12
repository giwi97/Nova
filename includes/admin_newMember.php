<?php
if(isset($_POST['submit'])){

    include_once 'config.php';

    $file = $_FILES['file'];

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

                $fname = $_POST['fname'];
                $mname = $_POST['mname'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];
                $pno = $_POST['pno'];
                $adrs = $_POST['adrs'];

                $sql = "INSERT INTO members (fname, mname, lname, email, phone, img_location, address, status)
							VALUES('$fname', '$mname', '$lname', '$email', '$pno', '$fileNameNew', '$adrs', '0')";

                if ( $conn->query($sql) === TRUE ) {

                    $message = "Successfully added to the database!";
                    echo "<script type='text/javascript'>alert('$message');
							  window.location.href='../admin.newMember.php';</script>";
                }else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }


            }else {
                $message = "File size is higher!";
                echo "<script type='text/javascript'>alert('$message');
						   window.location.href='../admin.newMember.php';</script>";
            }

        }else{
            $message = "Error in uploading file!";
            echo "<script type='text/javascript'>alert('$message');
					   window.location.href='../admin.newMember.php';</script>";
        }

    }else {
        $message = "Invalid file type!";
        echo "<script type='text/javascript'>alert('$message');
				   window.location.href='../admin.newMember.php';</script>";
    }
}

?>