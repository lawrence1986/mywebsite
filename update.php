<?php

include "db.php";

$id = $_POST['id'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$course = $_POST['course'];

$sql = "UPDATE students SET
fullname='$fullname',
email='$email',
phone='$phone',
course='$course'
WHERE id=$id";

mysqli_query($conn,$sql);

header("Location:view_students.php");

?>