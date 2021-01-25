<?php
include 'include/connection.php';

//Student Counter
$query = "SELECT COUNT(studentID) FROM studentinfo";
$result =  $conn->query($query);
$studentCounter = 0;
while ($data = $result->fetch_row()) {
    $studentCounter += $data[0];
}



$conn->close();
