<?php
require_once 'Employee.php';
$emp = new Employee();

if (!isset($_GET['id'])) {
    die("Employee ID not provided.");
}

$id = $_GET['id'];
$data = $emp->getEmployee($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($emp->update($id, $_POST['full_name'], $_POST['email'], $_POST['phone'], $_POST['department'], $_POST['date_of_joining'])) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error updating employee.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Employee</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Edit Employee</h2>
<form method="post">
    Full Name: <input type="text" name="full_name" value="<?= $data['full_name'] ?>" required><br>
    Email: <input type="email" name="email" value="<?= $data['email'] ?>" required><br>
    Phone: <input type="text" name="phone" value="<?= $data['phone'] ?>"><br>
    Department: <input type="text" name="department" value="<?= $data['department'] ?>"><br>
    Date of Joining: <input type="date" name="date_of_joining" value="<?= $data['date_of_joining'] ?>"><br>
    <input type="submit" value="Update">
</form>

<a href="index.php">Back to Employee List</a>

</body>
</html>
