<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en">
	<head>
		<link rel="shortcut icon" href="favicon.ico">
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta charset="utf-8">
		<title>
			Damn Stupid Simple Framework
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="A basic template for Bootstrap 3.0">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href="resources/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<!--
		You can also serve Bootstrap CSS from CDN
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		-->
		<link href="resources/css/styling.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="navbar-header">
					<h1 class="navbar-brand">
						<a href="#">
							<img class="logo" src="resources/img/logo.png">
							<span>DSS</span>
						</a>
					</h1>
				</div>
				<div class="navbar-top">
					<ul class="nav navbar-nav navbar-right">
						<li class="active">
							<a href="#">Home</a>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Hello, <?= Sentry::getUser()->email; ?>
								<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="logout">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="">
				<h1>
					Admin Home
				</h1>
				<p>A very fresh start for the MVC framework with some basic CRUD functions</p>
				<ul class="nav nav-tabs" style="margin-top: 20px">
					<li class="active"><a data-toggle="tab" href="#posts">Posts</a></li>
					<li><a data-toggle="tab" href="#home">Profile</a></li>
				</ul>
				<div class="tab-content">
					<div id="posts" class="tab-pane fade in active">
						<div style="max-width:600px; padding: 10px;">
							<table class="table table-striped">
								<thead>
								<tr>
									<th>Firstname</th>
									<th>Lastname</th>
									<th>Email</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>John</td>
									<td>Doe</td>
									<td>john@example.com</td>
								</tr>
								<tr>
									<td>Mary</td>
									<td>Moe</td>
									<td>mary@example.com</td>
								</tr>
								<tr>
									<td>July</td>
									<td>Dooley</td>
									<td>july@example.com</td>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div id="home" class="tab-pane fade">
						<div style="max-width:400px; padding: 10px;">
							<form method="POST" action="updateprofile">
								<div class="form-group">
									Email: <input value="<?= Sentry::getUser()->email; ?>" class="form-control input-sm">
								</div>
								<div class="form-group">
									Name: <input value="<?= Sentry::getUser()->name; ?>" class="form-control input-sm">
								</div>
								<div class="form-group">
									Password: <input value="" class="form-control input-sm">
								</div>
								<div class="form-group">
									<button class="btn btn-success">Change details</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div id="footer">
			<div class="col-xs-12">
				Powered by Damn Stupid Simple
			</div>
		</div>
		<script type="text/javascript" src="resources/js/jquery.min.js"></script>
		<script type="text/javascript" src="resources/js/bootstrap.min.js"></script>

		<!--
		You can also serve Bootstrap and jQuery from CDN
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		-->
	</body>
</html>
