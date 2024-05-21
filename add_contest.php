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
                    <span class="text">Add contest</span>
                </div>

                <div class="boxes">
                    <div class="box box2">
                        <i class="uil uil-share"></i>
                        <span class="text">Current Contests</span>
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
                </div>
            </div>

            <div class="activity">
            <form action="addcontest.php" method="post" enctype="multipart/form-data">
            <?php
            if(isset($message)){
                foreach($message as $message){
                    echo '<div class="message">'.$message.'</div>';
                }
            }
            ?>
            <input type="text" name="name" placeholder="Contest name" class="box" required>
            <label>Start Date:</label>
            <input type="datetime-local" name="start_date" required>
            <label>End Date:</label>
            <input type="datetime-local" name="end_date" required>
            <input type="text" name="description" placeholder="Description" class="box" required>
            <input type="text" name="contest_type" placeholder="Contest Type" class="box" required>
            <input type="submit" name="submit" value="Add Contest" class="btn">
        </form>
            </div>
        </div>
    </section>

    <script src="./assets/js/admin.js"></script>
</body>
</html>