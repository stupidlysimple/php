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
		<link href="resources/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<!--
		You can also serve Bootstrap CSS from CDN
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		-->
		<link href="resources/assets/css/styling.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="navbar-header">
					<h1 class="navbar-brand">
						<a href="#">
							<img class="logo" src="resources/assets/img/logo.png">
							<span>DSS</span>
						</a>
					</h1>
				</div>
				<div class="navbar-top">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="home">Home</a>
						</li>
                        <li class="active">
							<a href="service">Services</a>
						</li>
						<li>
							<a href="login">Login</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="text-center">
				<h1>
					Service Demonstration
				</h1>
				<hr class="separator">
			</div>
            <p class="lead">
                Service is where all of your written applications reside.
            </p>
            <p>
                We have a couple of test functions to demonstrate how to use service in DSS:
            </p>
            <p>
                1. A function that only returns a value <br>
                <span class="code">echo $service->test->hello();</span><br>
                Output: <?php echo $service->test->hello(); ?>
            </p>
            <br>
            <p>
                2. A function that calculate and returns a value <br>
                <span class="code">echo $service->test->calculate(1,'+',2);</span><br>
                Output: <?php echo $service->test->calculate(1,'+',2); ?>
            </p>
            <br>
            <p>
            Simply edit the file in the directory /config/service.php and link it with the file in /app/Service/YourAppName:
            </p>
            <p>
                <pre class="code">
/*
|--------------------------------------------------------------------------
| Services
|--------------------------------------------------------------------------
|
| All of your applications will be mapped here, and can be accessible
| with the $service object in your app.
| 
| e.g: $service->test->hello();
|
| 'the namespace' => 'the variable name for accessing your written applications'
|
*/

return [
    'Service\Test\TestService' => 'test'
];
                </pre>
            </p>
        <p>
        That's it!
        </p>
		</div>
		<div id="footer">
			<div class="col-xs-12">
				Powered by Damn Stupid Simple v0.3.0
			</div>
		</div>
		<script type="javascript" src="resources/assets/js/bootstrap.min.js"></script>
		<script type="javascript" src="resources/assets/js/jquery.min.js"></script>

		<!--
		You can also serve Bootstrap and jQuery from CDN
		<script type="javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script type="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		-->
	</body>
</html>
