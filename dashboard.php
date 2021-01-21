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
                <p>DASHBOARD</p>
            </div>
            <div class="info-region">
                <div class="landing-region">
                    <div class="row p-3">
                        <div class="col-sm-3">
                            <div class="card shadow">
                                <div class="card-body" style="background-color: #ED7D31;">
                                    <h5 class="card-title"># of Course: </h5>
                                    <p class="card-text">Avg PLO Map: </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card shadow">
                                <div class="card-body" style="background-color: #92D050;">
                                    <h5 class="card-title"># of Students:</h5>
                                    <p class="card-text">Avg achieved PLO:</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card shadow">
                                <div class="card-body" style="background-color: #00B0F0;">
                                    <h5 class="card-title"># of Faculty: </h5>
                                    <p class="card-text">Practicing Semester: </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card shadow">
                                <div class="card-body" style="background-color: #7030A0;">
                                    <h5 class="card-title text-white"># of PLO:</h5>
                                    <p class="card-text text-white">Achieved so far: </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="col-sm-4">
                            <h5 class="p-2 bg-primary text-white">PLO Achievement</h5>
                            <canvas class="shadow-lg" id="bar" width="400" height="400"></canvas>
                        </div>
                        <div class="col-sm-4">
                            <h5 class="p-2 bg-secondary text-white">Student Progress</h5>
                            <canvas class="shadow-lg" id="line" width="400" height="400"></canvas>
                        </div>
                        <div class="col-sm-4">
                            <h5 class="p-2 bg-success text-white">Course Progress</h5>
                            <canvas class="shadow-lg" id="line2" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.min.js"></script>
    <script type="text/javascript" src="./js/index_script.js"></script>
    <script type="text/javascript" src="./js/chart_script.js"></script>

</body>

</html>