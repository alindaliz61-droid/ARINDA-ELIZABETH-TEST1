<?php
require_once 'db.php';

class Employee {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function create($full_name, $email, $phone, $department, $date_of_joining) {
        $stmt = $this->conn->prepare("INSERT INTO employees (full_name, email, phone, department, date_of_joining) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $full_name, $email, $phone, $department, $date_of_joining);
        return $stmt->execute();
    }

    public function readAll() {
        $result = $this->conn->query("SELECT * FROM employees");
        return $result;
    }

    public function getEmployee($id) {
        $stmt = $this->conn->prepare("SELECT * FROM employees WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function update($id, $full_name, $email, $phone, $department, $date_of_joining) {
        $stmt = $this->conn->prepare("UPDATE employees SET full_name=?, email=?, phone=?, department=?, date_of_joining=? WHERE id=?");
        $stmt->bind_param("sssssi", $full_name, $email, $phone, $department, $date_of_joining, $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM employees WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    public function __destruct() {
        $this->conn->close();
    }
}
?>
