<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Analytics</title>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/footers/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cheatsheet/">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="assets/css/analytics.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <?php include 'header_user.php';?>
  
    <h2>Progress</h2>
 
    <div class="w3-container">

    <div class="w3-light-grey">
    <div class="w3-container w3-green w3-center" style="width:25%">25%</div>
    </div><br>

    <div class="w3-light-grey">
    <div class="w3-container w3-red w3-center" style="width:50%">50%</div>
    </div><br>

    <div class="w3-light-grey">
    <div class="w3-container w3-blue" style="width:75%">75%</div>
    </div><br>

    </div>
    <div class="chart-row">
        <div class="chart-contain"> 
        <h3>Languages used per minutes</h3>
        <canvas id="myBarChart"></canvas>
        </div>

        <div class="chart-contain">
        <h3>Hours coded per month</h3>
        <canvas id="myLineChart"></canvas>
        </div>

        <div class="chart-contain">
        <h3>Languages used today</h3>
        <canvas id="myPieChart"></canvas>
        </div>
    </div>

    <?php include 'footer_user.php';?>

    <script>
    // Bar chart
    var ctx = document.getElementById('myBarChart').getContext('2d');
    var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['C', 'C++', 'Python', 'Java', 'PHP', 'Javascript'],
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

    // Line chart
    var ctx = document.getElementById('myLineChart').getContext('2d');
    var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June'],
        datasets: [{
        label: 'Hours coded',
        data: [100, 120, 150, 60, 300, 450],
        backgroundColor: [
            'rgba(255, 99, 132, 0.2)'
        ],
        borderColor: [
            'rgba(255, 99, 132, 1)'
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

    </script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>














