<?php
include 'include/connection.php';

//Student Counter
$query = "SELECT COUNT(studentID) FROM studentinfo";
$result =  $conn->query($query);
$studentCounter = 0;
while ($data = $result->fetch_row()) {
    $studentCounter += $data[0];
}

//No of Course
// $query = "SELECT DISTINCT selectCourse FROM studentinfo ORDER BY selectCourse";
// $result =  $conn->query($query);
// $courseCounter = 0;
// while ($data = $result->fetch_row()) {
//     $courseCounter += $data[0];
// }
// intval($courseCounter);



$conn->close();
