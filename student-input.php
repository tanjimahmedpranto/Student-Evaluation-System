<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">

    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT MGMT::Dashboard</title>
</head>

<body>
    <div class="side-nav">
        <div class="top-section">
            <div class="text-center title">
                <p>STUDENT PERFORMANCE EVALUATION SYSTEM</p>
            </div>
            <div class="logo">
                <img src="img/iub_logo.png" alt="">
            </div>
        </div>
        <div class="bottom-section">
            <ul>
                <li><i class="bi bi-house-door-fill"></i><a href="dashboard.php">DASHBOARD</a></li>
                <li><i class="bi bi-input-cursor-text"></i><a href="student-input.php">STUDENT INPUT</a></li>
                <li><i class="bi bi-clipboard-check"></i><a href="report.php">REPORT</a></li>
            </ul>
        </div>
    </div>
    <div class="right-section">
        <div class="top-nav p-3">
            <!---->
            <form class="form-inline" style="width: 50%;">
                <input class="form-control mr-sm-2 d-inline" type="search" style="width: 35%;" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0 d-inline" type="submit">Search</button>
            </form>
            <div class="log-out-btn d-inline">
                <a type="submit" href="index.php">LOG OUT</a>
            </div>
            <!---->
        </div>
        <div class="section">
            <div class="title">
                <p>INPUT</p>
            </div>
            <div class="info-region">
                <div class="landing-region" style="padding: 32px;">
                    <form action="/php/mark-processor.php" method="get">
                        <div class="input-section-menu">
                            <h5 class="">Select Course</h5>
                            <select class="form-select form-control" id="selectCourse" aria-label="Default select example">
                                <option value="CSE303">CSE303 - Database Management System</option>
                                <!-- <option value="2">Two</option>
                            <option value="3">Three</option> -->
                            </select>
                        </div>
                        <div class="row">
                            <h5 class="pt-3">Student Info</h5>
                            <div class="col-sm-3">
                                <div class="input-section">
                                    <div class="input-group">
                                        <!-- <div class="input-group-prepend">
                                        <span class="input-group-text" id="">Student ID</span>
                                    </div> -->
                                        <input type="text" maxlength="7" placeholder="ID" class="form-control" id="studentID">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-section">
                                    <div class="input-group">
                                        <!-- <div class="input-group-prepend">
                                        <span class="input-group-text" id="">Student ID</span>
                                    </div> -->
                                        <input type="text" maxlength="7" placeholder="Course ID" class="form-control" id="courseID">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-section">
                                    <div class="input-group">
                                        <!-- <div class="input-group-prepend">
                                        <span class="input-group-text" id="">Student ID</span>
                                    </div> -->
                                        <input type="text" maxlength="1" placeholder="Section" id="section" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-section">
                                    <div class="input-group">
                                        <!-- <div class="input-group-prepend">
                                        <span class="input-group-text" id="">Student ID</span>
                                    </div> -->
                                        <input type="text" maxlength="7" placeholder="Semester" id="semester" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="pt-3">Mid Term Marks - Course Outcomes</h5>
                        <div class="input-group pt-3">
                            <!-- <div class="input-group-prepend">
                                <span class="input-group-text" id="">Course Outcomes</span>
                            </div> -->
                            <input type="text" maxlength="2" pattern="[0-9]*" placeholder="Q1 - CO1" id="midQ1" class="form-control">
                            <input type="text" maxlength="2" placeholder="Q2 - CO1" id="midQ2" class="form-control">
                            <input type="text" maxlength="2" placeholder="Q3 - CO1" id="midQ3" class="form-control">
                            <input type="text" maxlength="2" placeholder="Q4 - CO2" id="midQ4" class="form-control">
                            <input type="text" maxlength="2" placeholder="Q5 - CO1" id="midQ5" class="form-control">
                            <input type="text" maxlength="2" placeholder="Q6 - CO1" id="midQ6" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-group pt-3">
                                    <input type="text" maxlength="3" placeholder="Mid Term Total" id="midTermTotal" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group pt-3">
                                    <input type="text" maxlength="3" placeholder="MidTerm Total Converted" id="midTermConverted" class="form-control">
                                </div>
                            </div>
                        </div>
                        <h5 class="pt-3">Final Term Marks - Course Outcomes</h5>
                        <div class="input-group pt-3">
                            <!-- <div class="input-group-prepend">
                                <span class="input-group-text" id="">Course Outcomes</span>
                            </div> -->
                            <input type="text" maxlength="2" pattern="[0-9]*" placeholder="Q1 - CO1" class="form-control">
                            <input type="text" maxlength="2" placeholder="Q2 - CO1" class="form-control">
                            <input type="text" maxlength="2" placeholder="Q3 - CO2" class="form-control">
                            <input type="text" maxlength="2" placeholder="Q4 - CO3" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-group pt-3">
                                    <input type="text" maxlength="3" placeholder="Final Term Total" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group pt-3">
                                    <input type="text" maxlength="3" placeholder="FinalTerm Total Converted" class="form-control">
                                </div>
                            </div>
                        </div>
                        <h5 class="pt-3">Project Work</h5>
                        <div class="input-group pt-3">
                            <!-- <div class="input-group-prepend">
                                <span class="input-group-text" id="">Course Outcomes</span>
                            </div> -->
                            <input type="text" maxlength="2" pattern="[0-9]*" placeholder="Lab - CO4" class="form-control">
                            <input type="text" maxlength="2" placeholder="Project Work" class="form-control">
                            <input type="text" maxlength="2" placeholder="Project Work Total" class="form-control">
                        </div>
                        <h5 class="pt-3">Course Outcome - Total</h5>
                        <div class="input-group pt-3">
                            <!-- <div class="input-group-prepend">
                                <span class="input-group-text" id="">Course Outcomes</span>
                            </div> -->
                            <input type="text" maxlength="3" pattern="[0-9]*" placeholder="CO1" class="form-control">
                            <input type="text" maxlength="3" placeholder="CO2" class="form-control">
                            <input type="text" maxlength="3" placeholder="CO3" class="form-control">
                            <input type="text" maxlength="3" placeholder="CO4" class="form-control">
                        </div>
                        <div class="submit-btn" style="float: right; margin-top: 32px;">
                            <button type="submit" class="btn-secondary" style="width: 100px; height: 32px; border: none; border-radius: 5px;">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</body>

</html>