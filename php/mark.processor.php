<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "spe";

$link = mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_error()) {
    die("Could not connect to db");
} else {
    if (isset($_GET['selectCourse'])) {
        $selectCourse = null;
    }
    // $studentID = $_GET["studentID"];
    // $courseID = $_GET["courseID"];
    // $section = $_GET["section"];
    // $semester = $_GET["semester"];
    // $midQ1 = $_GET["midQ1"];
    // $midQ2 = $_GET["midQ2"];
    // $midQ3 = $_GET["midQ3"];
    // $midQ4 = $_GET["midQ4"];
    // $midQ5 = $_GET["midQ5"];
    // $midQ6 = $_GET["midQ6"];
    // $midTermTotal = $_GET["midTermTotal"];
    // $finalQ1 = $_GET["finalQ1"];
    // $finalQ2 = $_GET["finalQ2"];
    // $finalQ3 = $_GET["finalQ3"];
    // $finalQ4 = $_GET["finalQ4"];
    // $finalTermTotal = $_GET["finalTermTotal"];
    // $finalTermConverted = $_GET["finalTermConverted"];
    // $labCO4 = $_GET["labCO4"];
    // $projectWork = $_GET["projectWork"];
    // $TotalCO1 = $_GET["TotalCO1"];
    // $TotalCO2 = $_GET["TotalCO2"];
    // $TotalCO3 = $_GET["TotalCO3"];
    // $TotalCO4 = $_GET["TotalCO4"];

    // $query = "INSERT INTO `studentinfo` (`selectCourse`, `studentID`, `courseID`, `section`, `semester`, `midQ1`, `midQ2`, `midQ3`, `midQ4`, `midQ5`, `midQ6`, `midTermTotal`, `finalQ1`, `finalQ2`, `finalQ3`, `finalQ4`, `finalTermTotal`, `fianlTermConverted`, `labCO4`, `projectWork`, `TotalCO1`, `TotalCO2`, `TotalCO3`, `TotalCO4`) VALUES ('$selectCourse','$studentID', '$courseID', '$section', '$semester', '$midQ1', '$midQ2', '$midQ3', '$midQ4', '$midQ5', '$midQ6', '$midTermTotal', '$finalQ1', '$finalQ2', '$finalQ3', '$finalQ4', '$finalTermTotal', '$finalTermConverted', '$labCO4', '$projectWork', '$TotalCO1', '$TotalCO2', '$TotalCO3', '$TotalCO4')";
    // $query_next = "INSERT INTO `studentinfo` (`selectCourse`, `studentID`, `courseID`, `section`) VALUES ('$selectCourse','$studentID', '$courseID', '$section')";
    $query_test = "INSERT INTO `studentinfo` (`selectCourse`) VALUES ('$selectCourse')";
    mysqli_query($link, $query_test);

    // echo 'data submitted';

    // header("refresh:0.0000000000000000000000000000000000000000000000000001;url=http://localhost/dars/iub_admin.php?");

    // mysqli_close($link);
}
?>
<!DOCTYPE html>
<html lang="en">
<script>
    // window.location.replace("http://localhost/stdtmg/student-input.php?");
</script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>