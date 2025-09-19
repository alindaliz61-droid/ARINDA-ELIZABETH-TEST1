<?php
require_once 'Employee.php';
$emp = new Employee();
$employees = $emp->readAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Records</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Employee List</h2>
<a href="create.php">Add New Employee</a>

<table>
    <tr>
        <th>ID</th><th>Name</th><th>Email</th><th>Phone</th>
        <th>Department</th><th>Date of Joining</th><th>Actions</th>
    </tr>
    <?php while($row = $employees->fetch_assoc()) { ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['full_name'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['phone'] ?></td>
        <td><?= $row['department'] ?></td>
        <td><?= $row['date_of_joining'] ?></td>
        <td>
            <a href="update.php?id=<?= $row['id'] ?>">Edit</a>
            <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this employee?')">Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>

</body>
</html>
