<!doctype html>
<html>

<head>
	<title> WUCC Homepage </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="wucc.css">
</head>


<body class="center">

	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="hidden-lg hidden-md normal">
					<a href="index.php"> Home </a>
				</li>
				<li> 
					<a class="normal" href="about.html"> About </a>
				</li>
				<li>
					<a class="normal" href="carpool.php"> Carpool </a>
				</li>
				<li class="hidden-xs hidden-s">
					<a href="index.php">
						<img id="big-logo" class="img-responsive" src="images/navbar_logo.png"/>
					</a>
				</li>
				<li>
					<a class="normal" href="calendar.html"> Event Calendar </a>
				</li>
				<li>
					<a class="normal" href="media.html"> Media </a>
				</li>
			</ul>
		</div>
	</nav>

	<h1 class="white">Welcome to the Washington University<br>Climbing Club Homepage</h1>

	<div class="center gray">
		<div class="row">
			<div class="col-md-12">
				<h2> Climbing News </h2>
				<?php

				$mysqli = new mysqli('localhost', 'climbing_admin', 'goclimb512', 'climbing_news');

				if($mysqli->connect_errno) {
					printf("Connection Failed: %s\n", $mysqli->connect_error);
					exit;
				}

				$stmt = $mysqli->prepare("SELECT * FROM `news` order by id desc limit 1");
				if(!$stmt){
					printf("Query Prep Failed: %s\n", $mysqli->error);
					exit;
				}

				$stmt->execute();

				$stmt->bind_result($id, $title, $content, $date);

				while($stmt->fetch()){
					printf("<h4><strong>%s -- %s</strong></h4><p>%s</p>",htmlspecialchars($title),htmlspecialchars($date),htmlspecialchars($content));
				}

				$stmt -> close();
				?>	
				<a href="news.php"> See Older News </a>
			</div>
		</div>
	</div>
	<br>



	<div class="center gray">
		<div class="row">
			<h2> Need more info? </h2>
			<div class="col-md-4">
				<a class="btn btn-lg btn-custom" href="http://su.wustl.edu/mailman/listinfo/wuclimbing_climbing.wustl.edu"> Join our Mailing List </a>
			</div>
			<div class="col-md-4">
				<a class="btn btn-lg btn-custom" href="https://www.facebook.com/groups/146165145522908/"> WUCC Facebook </a>
			</div>
			<div class="col-md-4">
				<a class="btn btn-lg btn-custom" href="https://portfolio.wustl.edu/organization/wuclimbing"> WUSTL Portfolio </a>
			</div>
		</div>
	</div>






	<script src="https://code.jquery.com/jquery.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	<script> 
	$(document).ready(function() {
		$( document ).scroll(function() {
			$("#big-logo").animate({height:"50px"});
		});
	}); </script>

</body>
</html>