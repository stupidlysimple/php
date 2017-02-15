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
                <h1>Introduction to Model</h1>
                <p>The Model in any MVC frameworks will be responsible for maintaining data, which primarily listen to Controllers to update itself.</p>
                <p>The Eloquent ORM included with StupidlySimple provides a beautiful, simple ActiveRecord implementation for
                    working with your database. Each database table has a corresponding "Model" which is used to interact
                    with that table. Models allow you to query for data in your tables, as well as insert new records
                    into the table.</p>
                <p>Services are defined on <code>/app/Models</code> and are automatically included by Composer. See how we define them <a target="_blank" href="https://github.com/stupidlysimple/framework/tree/master/app/Model">on GitHub</a>.</p>

                <h1>Model Demonstration</h1>
                <p>We have a couple of test functions to demonstrate how to use model in the framework:</p>

                <h3>Load all Post </h3>
                <p>Load the whole post with <code>Model\Post::all()</code> </p>
                <p>
                    <?php
                    $i = 1;
                    foreach(Model\Post::all() as $post){
                        echo('
                        <div class="alert alert-info">
                            
                            <b><?= $first_post->'.$post->title.'</b><br>
                            <span><?= $first_post->'.$post->content.'</span>
                        </div>');
                    }
                    echo 'There are: '. Model\Post::all()->count() . ' posts.';
                    ?>
                </p>

                <h2>Get the first Post</h2>
                <p>Load the Post model <code>$first_post = Model\Post::all()->first();</code> then echo <code>$first_post->title</code> and <br>
                    <code>$first_post->content</code></p>
                <p>Output:</p>
                <p class="alert alert-info">
                    <?php $first_post = Model\Post::all()->first(); ?>
                    <b><?= $first_post->title ?></b><br>
                    <span><?= $first_post->content ?></span>
                </p>

                <h2>Searching for the POST with id 3</h2>
                <p>Search the Post model <code>$search_post = Model\Post::find(3);</code> then echo <code>$search_post->title</code> and <br>
                    <code>$search_post->content</code></p>
                <p>Output:</p>
                <p class="alert alert-info">
                    <?php $search_post = Model\Post::find(3); ?>
                    <b><?= $search_post->title ?></b><br>
                    <span><?= $search_post->content ?></span>
                </p>
            </div>
        </div>
    </div>

<?php Viewer::file('layouts/footer.php') ?>

</div>

<?php Viewer::file('layouts/scripts.php') ?>
</body>
</html>