<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<?php
$data = [ 'title' => 'StupidlySimple | Controller' ];
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
                <h1>Introduction to Controller</h1>
                <p>Controllers process incoming requests, handle user input and interactions, and execute appropriate
                    application logic. In StupidlySimple framework the controller class calls a separate view component
                    which is <code>View::file()</code> to generate the HTML.</p>
                <p>Controllers are located in <code>/app/Controllers</code> and are automatically included by Composer.
                    See how we define a controller <a target="_blank" href="https://github.com/stupidlysimple/framework/blob/master/app/Controller/Hello.php">on GitHub</a>.</p>

                <h1>Controller Demonstration</h1>
                <p>See how controller works:</p>

                <h2>1. Post a Form to /hello (view on <a target="_blank" href="https://github.com/stupidlysimple/framework/blob/master/app/Controller/Hello.php#L9">GitHub</a>)</h2>
                <p>The HTML request <code>POST /hello</code> will be mapped to <code>Controller\Hello::greetForm()</code></p>
                <p>Type your name and submit by clicking Greet button:</p>
                <form method="post" action="./hello">
                    <div class="6u 12u$(xsmall)">
                        <input type="text" name="name" id="name" value="" placeholder="Name">
                    </div>
                    <div class="12u$">
                        <ul class="actions">
                            <li><input type="submit" value="Greet" class="special"></li>
                            <li><input type="reset" value="Reset"></li>
                        </ul>
                    </div>
                </form>

                <h2>2. Authentication (view on <a target="_blank" href="https://github.com/stupidlysimple/framework/blob/master/app/Controller/Auth.php#L20">GitHub</a>)</h2>
                <p>Authentication is handled by <code>Controller\Auth</code>. Then, the controller
                will call responsible class <code>Cartalyst\Sentry</code> for everything related to authentication.</p>
                <p><a href="login" target="_blank" class="button special">Login</a></p>

                <h2>3. Registration (view on <a target="_blank" href="https://github.com/stupidlysimple/framework/blob/master/app/Controller/Auth.php#L20">GitHub</a>)</h2>
                <p>Registration is also handled by the <code>Controller\Auth</code>. The controller
                    will call responsible class <code>Cartalyst\Sentry</code> to do user registrations.</p>
                <form method="post" action="./register" autocomplete="off">
                    <div class="6u 12u$(xsmall)">
                        <input type="text" name="first_name" id="first_name" value="" placeholder="First Name" autocomplete="off">
                        <input type="text" name="last_name" id="last_name" value="" placeholder="Last Name" autocomplete="off">
                        <input type="email" name="email" id="email" value="" placeholder="Email" autocomplete="off">
                        <input type="password" name="password" id="password" value="" placeholder="Password" autocomplete="off">
                    </div>
                    <div class="12u$">
                        <ul class="actions">
                            <li><input type="submit" value="Register Now" class="special"></li>
                            <li><input type="reset" value="Reset"></li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php Viewer::file('layouts/footer.php') ?>

</div>

<?php Viewer::file('layouts/scripts.php') ?>
</body>
</html>