<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Competitions</title>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/footers/">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="assets/css/leaderboard.css">

</head>

<body>
    <?php include 'header_user.php';?>

    <div class="wrapper">
	<div class="lboard_section">
		<div class="lboard_tabs">
			<div class="tabs">
				<ul>
					<li data-li="today">Today</li>
				</ul>
			</div>
		</div>

		<div class="lboard_wrap">
			<div class="lboard_item today" style="display: none;">
				<div class="lboard_mem">
					<div class="name_bar">
						<p><span>1.</span> Keval</p>
						<div class="bar_wrap">
							<div class="inner_bar" style="width: 95%"></div>
						</div>
					</div>
					<div class="points">
						195 points
					</div>
				</div>
				<div class="lboard_mem">
					<div class="name_bar">
						<p><span>2.</span>Dharmi</p>
						<div class="bar_wrap">
							<div class="inner_bar" style="width: 80%"></div>
						</div>
					</div>
					<div class="points">
						185 points
					</div>
				</div>
				<div class="lboard_mem">
					<div class="name_bar">
						<p><span>3.</span>Sahil</p>
						<div class="bar_wrap">
							<div class="inner_bar" style="width: 60%;"></div>
						</div>
					</div>
					<div class="points">
						160 points
					</div>
				</div>
			</div>
		</div>

        <div class="lboard_item month" style="display: none;">
            <div class="lboard_mem">
					<div class="name_bar">
						<p><span>1.</span> Alex Mike</p>
						<div class="bar_wrap">
							<div class="inner_bar" style="width: 95%"></div>
						</div>
					</div>
					<div class="points">
						1195 points
					</div>
			</div>
				<div class="lboard_mem">
					<div class="name_bar">
						<p><span>2.</span>Dharmi</p>
						<div class="bar_wrap">
							<div class="inner_bar" style="width: 80%"></div>
						</div>
					</div>
					<div class="points">
						185 points
					</div>
				</div>
				<div class="lboard_mem">
					<div class="name_bar">
						<p><span>3.</span>Sahil</p>
						<div class="bar_wrap">
							<div class="inner_bar" style="width: 60%;"></div>
						</div>
					</div>
					<div class="points">
						160 points
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	


    <?php include 'footer_user.php';?>

    <script src="assets/js/leaderboard.js"></script>
</body>

</html>