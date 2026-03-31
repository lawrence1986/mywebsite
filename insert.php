<?php

include "db.php";

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$course = $_POST['course'];

$sql = "INSERT INTO students(fullname,email,phone,course)
VALUES('$fullname','$email','$phone','$course')";

if(mysqli_query($conn,$sql)){
    echo "Student Registered Successfully";
}else{
    echo "Error";
}

?>

<br><br>
<a href="index.php">Back</a>