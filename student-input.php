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
                <li><a href="/dashboard.php">DASHBOARD</a></li>
                <li><a href="/stdtmg/student-input.php">STUDENT INPUT</a></li>
                <li><a href="/report.php">REPORT</a></li>
            </ul>
            <div class="log-out-btn">
                <button type="submit" href="{{ url('/') }}">LOG OUT</button>
            </div>
        </div>
    </div>
    <div class="right-section">
        <div class="top-nav">
            <!---->
            <div class="pos-f-t">
                <div class="collapse" id="navbarToggleExternalContent">
                    <div class="bg-dark p-4">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </div>
                <nav class="navbar navbar-dark bg-dark">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
            </div>
            <!---->
        </div>
        <div class="section">
            <div class="title">
                <p>INPUT</p>
            </div>
            <div class="info-region">
                <div class="landing-region">
                    <div class="row p-3">

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</body>

</html>