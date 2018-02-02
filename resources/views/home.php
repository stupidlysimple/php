<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<?php
$data = ['title' => 'StupidlySimple PHP | Home'];
Core\Viewer::file('layouts/head.php', $data); ?>
<body>
<!-- Wrapper -->
<div id="wrapper">

    <?php Viewer::file('layouts/top.php') ?>

    <?php Viewer::file('layouts/menu.php') ?>

    <!-- Main -->
    <div id="main">
        <div class="inner">
            <header>
                <h1>Fabio baked PHP micro-framework<br>ready to calcula.</h1>
                <p>This is your very fresh homepage. All template files are located in <code>/resources/views</code>
                    from the root directory. You can read tutorials and documentations on <a target="_blank" href="https://stupidlysimple.github.io">our website</a>
                    or even from here.
                    Start coding today and get creative.</p>
            </header>
            <section class="tiles">
                <article class="style1">
                    <span class="image">
                        <img src="resources/assets/images/pic1.jpg" alt=""/>
                    </span>
                    <a href="routing">
                        <h2>Routing</h2>
                        <div class="content">
                            <p>Back in the days, we all used to route the web directly to our .html or .php files.
                            Nowadays on MVC frameworks, we do it quite differently.</p>
                        </div>
                    </a>
                </article>
                <article class="style2">
                    <span class="image">
                        <img src="resources/assets/images/pic2.jpg" alt=""/>
                    </span>
                    <a href="controller">
                        <h2>Controllers</h2>
                        <div class="content">
                            <p>See how controller works in the Framework.</p>
                        </div>
                    </a>
                </article>
                <article class="style3">
                    <span class="image">
                        <img src="resources/assets/images/pic3.jpg" alt=""/>
                    </span>
                    <a href="service">
                        <h2>Services</h2>
                        <div class="content">
                            <p>See how service works in StupidlySimple Framework.</p>
                        </div>
                    </a>
                </article>
                <article class="style4">
                    <span class="image">
                        <img src="resources/assets/images/pic4.jpg" alt=""/>
                    </span>
                    <a href="model">
                        <h2>Models</h2>
                        <div class="content">
                            <p>Provides easy access to your data. Models are powered by <code>Eloquent ORM</code></p>
                        </div>
                    </a>
                </article>
                <article class="">
                    <span class="image">
                        <img src="resources/assets/images/pic6.jpg" alt=""/>
                    </span>
                    <a href="https://stupidlysimple.github.io">
                        <h2>And More!</h2>
                        <div class="content">
                            <p>More documentations are available on <code>stupidlysimple.github.io</code></p>
                        </div>
                    </a>
                </article>
            </section>
        </div>
    </div>

<?php Viewer::file('layouts/footer.php') ?>

</div>

<?php Viewer::file('layouts/scripts.php') ?>
</body>
</html>
