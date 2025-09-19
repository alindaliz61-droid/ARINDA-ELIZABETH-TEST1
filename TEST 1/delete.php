<?php
require_once 'Employee.php';
$emp = new Employee();

if (isset($_GET['id'])) {
    if ($emp->delete($_GET['id'])) {
        header("Location: index.php");
        exit;
    } else {
        echo "Delete failed.";
    }
} else {
    echo "No ID specified.";
}
?>
