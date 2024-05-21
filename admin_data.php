<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/admin.css">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Admin</title>
</head>
<body>
<nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="./assets/images/PY.png" alt="Admin">
            </div>

            <span class="logo_name">Programming Tracker</span>
        </div>

        <div class="menu-items">
        <ul class="nav-links">
                <li><a href="admin.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li><a href="admin_data.php">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Data</span>
                </a></li>
                <li><a href="admin_analytics.php">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Analytics</span>
                </a></li>
                <li><a href="add_problem.php">
                    <i class="uil uil-plus"></i>
                    <span class="link-name">Add problem</span>
                </a></li>
                <li><a href="add_contest.php">
                    <i class="uil uil-plus"></i>
                    <span class="link-name">Add contest</span>
                </a></li>
                <li><a href="admin_manage.php">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Manage users</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="admin_login.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>


            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <img src="./assets/images/PY.png" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Problems</span>
                </div>
            </div>

            <div class="activity">

            <table class="table table-borderless table-data3">
            <!-- <table class="table table-borderless table-striped table-earning"> -->
            <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Contest id.</th>
                <th>Action</th>
            </tr>
            </thead>
            <?php

            $con = mysqli_connect("localhost:3333","root","","progtrack");


                    // $filtervalues = $_GET['search'];
                    // $query = "SELECT * FROM problem WHERE CONCAT(name,description,contest_id) LIKE '%$filtervalues%' ";
                    $query = "SELECT * FROM problem";
                    $query_run = mysqli_query($con, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                        foreach($query_run as $items)
                        {
                            ?>
                            <tr>
                                <td><?= $items['name']; ?></td>
                                <td><?= $items['description']; ?></td>
                                <td><?= $items['contest_id']; ?></td>
                                <td><a href="delete_problem.php?id=<?= $items['id']; ?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                            <?php
                        }
                    }
                    else
                    {
                        ?>
                            <tr>
                                <td colspan="4">No Record Found</td>
                            </tr>
                        <?php
                    }
                
                
        ?>
                <tbody>

                </tbody>
            </table>

            </div>
        </div>
    <!-- </section> -->

    <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Contests</span>
                </div>
            </div>

            <div class="activity">

            <table class="table table-borderless table-data3">
            <!-- <table class="table table-borderless table-striped table-earning"> -->
            <thead>
            <tr>
                <th>Name</th>
                <th>Start date</th>
                <th>End date</th>
                <th>Description</th>
                <th>Contest type</th>
                <th>Action</th>
            </tr>
            </thead>
            <?php

            $con = mysqli_connect("localhost:3333","root","","progtrack");


                    // $filtervalues = $_GET['search'];
                    // $query = "SELECT * FROM problem WHERE CONCAT(name,description,contest_id) LIKE '%$filtervalues%' ";
                    $query = "SELECT * FROM contest";
                    $query_run = mysqli_query($con, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                        foreach($query_run as $items)
                        {
                            ?>
                            <tr>
                                <td><?= $items['name']; ?></td>
                                <td><?= $items['start_date']; ?></td>
                                <td><?= $items['end_date']; ?></td>
                                <td><?= $items['description']; ?></td>
                                <td><?= $items['contest_type']; ?></td>
                                <td><a href="delete_contest.php?id=<?= $items['id']; ?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                            <?php
                        }
                    }
                    else
                    {
                        ?>
                            <tr>
                                <td colspan="4">No Record Found</td>
                            </tr>
                        <?php
                    }
                
                
        ?>
                <tbody>

                </tbody>
            </table>

            </div>
        </div>
    </section>

    <script src="./assets/js/admin.js"></script>
</body>
</html>