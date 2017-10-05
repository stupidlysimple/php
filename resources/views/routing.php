<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<?php
$data = ['title' => 'StupidlySimple PHP | Service'];
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
                <h1>Introduction to Routing</h1>
                <p>The Router is responsible for mapping incoming browser requests to particular MVC controller actions.
                    For example, the Router will map the uri <b>/home</b> to a HTML file called <b>myhomepage.html</b>. See?</p>
                <p>The Router is among the important part in MVC frameworks. Routes are defined in the directory <code>/routes</code>
                    in the root of the StupidlySimple framework. We have several route groups defined in the folder, which is:
                    <code>api.php</code> for the use of RESTful APIs, <code>auth.php</code> for authentication related routes,
                    <code>web.php</code> for general routes and <code>hello.php</code> simply for this tutorial.
                </p>
                <p>Check out on how we define the web routes <a target="_blank" href="https://github.com/stupidlysimple/framework/blob/master/routes/web.php">on GitHub</a>.</p>

                <h1>Router Demonstration</h1>
                <p>We have a couple of example on how routing on StupidlySimple works:</p>

                <h2>1) Remove .php from routes (View on <a target="_blank" href="https://github.com/stupidlysimple/framework/blob/master/routes/web.php#L24">GitHub</a>)</h2>
                <p><a href="./routing" class="button">Go to /routing</a><br>
                    (Isn't it the same? Duh! But, you got the point?)</p>

                <h2>2) The Hello World (View on <a target="_blank" href="https://github.com/stupidlysimple/framework/blob/master/routes/hello.php#L21">GitHub</a>)</h2>
                <p><a href="./hello" class="button">Go to /hello</a></p>

                <h2>3) Route /hello/yourname (View on <a target="_blank" href="https://github.com/stupidlysimple/framework/blob/master/routes/hello.php#L24">GitHub</a>)</h2>
                <p><a href="./hello/Adam" class="button">Go to /hello/Adam</a><br>
                    (See <a href="controller">Controller</a> to understand how this works)</p>
            </div>
        </div>
    </div>

<?php Viewer::file('layouts/footer.php') ?>

</div>

<?php Viewer::file('layouts/scripts.php') ?>
</body>
</html>