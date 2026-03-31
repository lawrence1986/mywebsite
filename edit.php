<?php
include "db.php";

$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM students WHERE id=$id");

$row = mysqli_fetch_assoc($result);
?>

<h2>Edit Student</h2>

<form action="update.php" method="POST">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

Full Name:<br>
<input type="text" name="fullname" value="<?php echo $row['fullname']; ?>"><br><br>

Email:<br>
<input type="text" name="email" value="<?php echo $row['email']; ?>"><br><br>

Phone:<br>
<input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br><br>

Course:<br>
<input type="text" name="course" value="<?php echo $row['course']; ?>"><br><br>

<input type="submit" value="Update">

</form>