<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>About Us</title>
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
    <div class="title">ABOUT US</div>
    <div2>
    <h2><a href="#">Programming Tracker is a coding platform where we can improve our coding skills.</a>
      <a>Our mission is to provide a platform for programmers of all skill levels to improve their coding skills.</a>
      <a>We offer a programming challenges and practice problems, as well as forums and community events to help you network with other programmers.</a>
      <a>If you have any questions or feedback, please don't hesitate to contact us at <a href="mailto:info@programmingtracker.com">info@programmingtracker.com</a>.</a></h2>
    </div2>
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
</body>

</html>