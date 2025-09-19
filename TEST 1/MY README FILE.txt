Employee Management System (PHP & MySQL)

This is a simple web-based CRUD (Create, Read, Update, Delete) application built using PHP, MySQL, and HTML/CSS. It allows you to manage employee records add new employees, view the list, update their details, and delete records.
Project Structure
employee-management
 index.php           Displays all employees (Read)
 create.php          Form to add a new employee (Create)
 update.php          Form to edit employee data (Update)
 delete.php          Deletes an employee by ID (Delete)
 Employee.php        Employee class handling DB operations
 db.php              Database connection class
 style.css           Basic styling for the frontend
 README.md           You're here

Features
 Add a new employee
 View all employees in a table
 Update employee details
 Delete employee records
 Confirmation on delete
 Styled with simple responsive CSS

Technologies Used

PHP (OOP)
MySQL (Database)
HTML5 & CSS3
Vanilla JavaScript

code for creating table of employes
CREATE TABLE employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    department VARCHAR(50),
    date_of_joining DATE
);
database credentials

private $host = "localhost";
private $username = "root"; 
private $password = "";     
private $dbname = "organization_db";



File	         Description
index.php	Lists all employees in a table
create.php	Form to add a new employee
update.php	Form to edit employee details
delete.php	Deletes an employee record
Employee.php	Handles all DB operations (CRUD)
db.php	Contains database connection logic
style.css	Contains all frontend styling
README.md	This documentation file