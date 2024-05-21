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

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
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
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-thumbs-up"></i>
                        <span class="text">Users</span>
                        <span class="number">
                        <?php
                        require_once ('./dbconnect.php'); 

                        $sql = "SELECT COUNT(*) as user_count FROM users";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);

                        $user_count = $row['user_count'];

                        echo $user_count;
                        ?>

                        </span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-comments"></i>
                        <span class="text">Contests</span>
                        <span class="number">
                        <?php
                        require_once ('./dbconnect.php'); 

                        $sql = "SELECT COUNT(*) as contest_count FROM contest";
                        $result = $conn->query($sql);

                        if ($result === false) {
                            die("Error executing query: " . $conn->errorInfo()[2]);
                        }

                        // Fetch the result row as an associative array
                        $row = $result->fetch(PDO::FETCH_ASSOC);
                        $contest_count = $row['contest_count'];

                        echo $contest_count;
                        ?>
                         
                        </span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-share"></i>
                        <span class="text">Problems</span>
                        <span class="number">
                        <?php
                        require_once ('./dbconnect.php');

                        $sql = "SELECT COUNT(*) as problem_count FROM problem";
                        $stmt = $conn->prepare($sql);

                        if ($stmt === false) {
                            die("Error preparing query: " . $conn->errorInfo()[2]);
                        }

                        if ($stmt->execute() === false) {
                            die("Error executing query: " . $stmt->errorInfo()[2]);
                        }

                        // Fetch the result row as an associative array
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                        $problem_count = $row['problem_count'];

                        echo $problem_count;
                        ?>

                        </span>
                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Activity</span>
                </div>
                <div class="activity-data">
                <?php include 'get_users.php'; ?>
                <div class="data names">
                        <span class="data-title">Name</span>
                        <span class="data-list"><?php echo $name; ?></span>
                    </div>
                    <div class="data email">
                        <span class="data-title">Email</span>
                        <span class="data-list"><?php echo $email; ?></span>
                    </div>
                    <div class="data joined">
                        <span class="data-title">Joined</span>
                        <span class="data-list"><?php echo $datejoin; ?></span>

                    </div>
                    <div class="data type">
                        <span class="data-title">Type</span>
                        <span class="data-list">New</span>

                    </div>
                    <div class="data status">
                        <span class="data-title">Status</span>
                        <span class="data-list">User</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="./assets/js/admin.js"></script>
</body>
</html>