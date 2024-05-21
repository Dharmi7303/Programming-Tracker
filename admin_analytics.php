<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/admin.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
	<script	src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                    <span class="text">Analytics</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-share"></i>
                        <span class="text">Problems</span>
                        <canvas id="bar_chart"></canvas>
                    </div>

                    <div class="box box2">
                        <i class="uil uil-share"></i>
                        <span class="text">IDE used</span>
                        <canvas id="myBarChart"></canvas>
                    </div>

                    <div class="box box3">
                        <i class="uil uil-share"></i>
                        <span class="text">Languages used</span>
                        <canvas id="myPieChart"></canvas>
                    </div>

                    
                </div>
            </div>

            </div>
    </section>

    <script>
    // Bar chart
    var ctx = document.getElementById('myBarChart').getContext('2d');
    var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Visual Studio Code', 'Notepad++', 'Sublime Text', 'Spyder'],
        datasets: [{
        label: 'Language used',
        data: [12, 19, 3, 5, 2, 3],
        backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
        }]
    },
    options: {
        scales: {
        yAxes: [{
            ticks: {
            beginAtZero: true
            }
        }]
        }
    }
    });

    //Pie chart
    var ctx = document.getElementById('myPieChart').getContext('2d');
    var myPieChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['PHP', 'HTML', 'CSS'],
        datasets: [{
          label: 'Minutes',
          data: [50, 60, 30],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)'
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });

	makechart();
    function makechart()
    {
        $.ajax({
            url:"graph.php",
            method:"POST",
            data:{action:'fetch'},
            dataType:"JSON",
            success:function(data)
            {
                var language = [];
                var total = [];
                var color = [];

                for(var count = 0; count < data.length; count++)
                {
                    language.push(data[count].language);
                    total.push(data[count].total);
                    color.push(data[count].color);
                }

                var chart_data = {
                    labels:language,
                    datasets:[
                        {
                            label:'Problem ID',
                            backgroundColor:color,
                            color:'#fff',
                            data:total
                        }
                    ]
                };

                var options = {
                    responsive:true,
                    scales:{
                        yAxes:[{
                            ticks:{
                                min:0
                            }
                        }]
                    }
                };

                var group_chart1 = $('#pie_chart');

                var graph1 = new Chart(group_chart1, {
                    type:"pie",
                    data:chart_data
                });

                var group_chart2 = $('#doughnut_chart');

                var graph2 = new Chart(group_chart2, {
                    type:"doughnut",
                    data:chart_data
                });

                var group_chart3 = $('#bar_chart');

                var graph3 = new Chart(group_chart3, {
                    type:'bar',
                    data:chart_data,
                    options:options
                });
            }
        })
    }

    </script>
    <script src="./assets/js/admin.js"></script>
</body>
</html>