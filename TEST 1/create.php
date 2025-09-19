<?php
require_once 'Employee.php';
$emp = new Employee();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($emp->create($_POST['full_name'], $_POST['email'], $_POST['phone'], $_POST['department'], $_POST['date_of_joining'])) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error adding employee.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Add New Employee</h2>
<form method="post">
    Full Name: <input type="text" name="full_name" required><br>
    Email: <input type="email" name="email" required><br>
    Phone: <input type="text" name="phone"><br>
    Department: <input type="text" name="department"><br>
    Date of Joining: <input type="date" name="date_of_joining"><br>
    <input type="submit" value="Add Employee">
</form>

<a href="index.php">Back to Employee List</a>

</body>
</html>
