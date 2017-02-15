<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<?php
$data = [ 'title' => 'StupidlySimple PHP | Service' ];
Core\Viewer::file('layouts/head.php', $data); ?>
<body>
<!-- Wrapper -->
<div id="wrapper">

    <?php Viewer::file('layouts/top.php') ?>

    <?php Viewer::file('layouts/menu.php') ?>

    <!-- Main -->
    <div id="main">
        <div class="inner">
            <div class="contents">
                <h1>Introduction to Service</h1>
                <p>The Service is an important layer in the Model-View-Controller (MVC) based frameworks,
                    it is where all of your written applications reside.</p>
                <p>A Service Layer defines set of available operations in regards with interfacing client layers i.e.
                    encapsulates the application's business logic. Basically, the controller will call the service and
                    present something to the client, i.e: a list, a calculated data etc.</p>
                <p>Services are defined on <code>/config/services.php</code>. See how we define them <a target="_blank" href="https://github.com/stupidlysimple/framework/blob/master/config/services.php">on GitHub</a>.</p>

                <h1>Service Demonstration</h1>
                <p>We have a couple of test functions to demonstrate how to use service in DSS:</p>

                <h2>a) A function that only returns a value</h2>
                <p>Calling method <b>hello</b> under service <b>test</b>:<br>
                    <code>echo $service->test->hello();</code>
                </p>
                <p>Output:<br>
                    <code><?php echo $service->test->hello(); ?></code>
                </p>
                <p>View on <a target="_blank" href="https://github.com/stupidlysimple/framework/blob/master/app/Service/Test/TestService.php#L8">GitHub</a></p>

                <h2>b) A function that calculate and returns a value </h2>
                <p>Calling method <b>calculate</b> under service <b>test</b> with 3 parameters:<br>
                    <code>echo $service->test->calculate(1,'+',2);</code>
                </p>
                <p>Output:<br>
                    <code><?php echo $service->test->calculate(1,'+',2); ?></code>
                </p>
            </div>
        </div>
    </div>

<?php Viewer::file('layouts/footer.php') ?>

</div>

<?php Viewer::file('layouts/scripts.php') ?>
</body>
</html>