<?php
include "db.php";

$result = mysqli_query($conn,"SELECT * FROM students");
?>

<h2>All Students</h2>

<table border="1">

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Course</th>
<th>Actions</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result)){
?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['fullname']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['course']; ?></td>

<td>
<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
</td>

</tr>

<?php
}
?>

</table>

<br>
<a href="index.php">Add Student</a>
