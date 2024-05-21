<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Languages</title>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/footers/">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body>
    <?php include 'header.php';?>
	<div class="img"></div>
	<div class="center">
    <div class="sub_title">Languages Supported</div><br><br><br>
    <!-- <div class="sub_title">One place. One solution.</div> -->
    <div1>
    <h2><a href="#">C</a></h2>
    <h2><a href="#">C++</a></h2>
    <h2><a href="#">Java</a></h2>
    <h2><a href="#">Python</a></h2>
    <h2><a href="#">HTML</a></h2>
    <h2><a href="#">CSS</a></h2>
    <h2><a href="#">JavaScript</a></h2>
    </div1>
  </div>
    <script>
            document.querySelectorAll('a').forEach((elem) => {

            elem.onmouseenter =
            elem.onmouseleave = (e) => {

              const tolerance = 10

              const left = 0
              const right = elem.clientWidth

              let x = e.pageX - elem.offsetLeft

              if (x - tolerance < left) x = left
              if (x + tolerance > right) x = right

              elem.style.setProperty('--x', `${ x }px`)

            }

           })
    </script>
    <?php include 'footer.php';?>
    

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script  src="./assets/js/index.js"></script> -->

</body>

</html>