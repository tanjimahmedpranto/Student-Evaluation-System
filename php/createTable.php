<?php
include './include/connection.php';

$studentInfoTable = "CREATE TABLE studentinfo (  
        selectCourse VARCHAR(255) NOT NULL,
        studentID INT NOT NULL PRIMARY KEY UNIQUE, 
        courseID INT NOT NULL, 
        section INT NOT NULL,
        semester VARCHAR(255) NOT NULL,
        totalCO1 INT NOT NULL,
        totalCO2 INT NOT NULL,
        totalCO3 INT NOT NULL,
        totalCO4 INT NOT NULL
    )";

if ($conn->query($studentInfoTable) === TRUE) {
    echo "Table 'studentInfoTable' created successfully<br>";
} else {
    echo "Error creating studentInfoTable table: " . $conn->error . "<br>";
}

$conn->close();
