<!doctype html>
<html>

<head>
	<title> WUCC Login and Registration </title>
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


	<h1 class="white"> WUCC Login and Registration </h1>


	<div class="center gray">
		<div class="row">
			<div class="col-md-6">
				<h2 class="align-left"> Sign Up - New Users </h2>
				<form action="register.php" method="POST">
					<div class="form-group align-left">
						<label>Name</label>
						<input type="text" name="name">
					</div>
					<div class="form-group align-left">
						<label>Email</label>
						<input type="email" name="email">
					</div>
					<div class="form-group align-left">
						<label>Phone</label>
						<input type="text" name="phone">
					</div>
					<div class="form-group align-left">
						<label>Username</label>
						<input type="text" name="username">
					</div>
					<div class="form-group align-left">
						<label>Password</label>
						<input type="password" name="password">
					</div>
					<div class="form-group align-left">
						<label>Confirm Password</label>
						<input type="password" name="password2">
					</div>
					<div class="form-group">
						<input class="btn-custom" type="submit">
					</div>
				</form>
			</div>
			<div class="col-md-6">
				<h2 class="align-left"> Login - Existing Users </h2>
				<form action="loginprocess.php" method="POST">
					<div class="form-group align-left">
						<label>Email</label>
						<input type="text" name="username">
					</div>
					<div class="form-group align-left">
						<label>Password</label>
						<input type="password" name="password">
					</div>
					<div class="form-group">
						<input class="btn-custom" type="submit">
					</div>
				</form>
			</div>
		</form>
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