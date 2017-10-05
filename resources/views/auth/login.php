<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en">
<head profile="http://www.w3.org/2005/10/profile">
    <link rel="icon"
          type="image/png"
          href="resources/assets/images/logo.png">
    <link rel="shortcut icon" href="favicon.ico">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta charset="utf-8">
    <title>
        StupidlySimple Intranet
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="A basic template for Bootstrap 3.0">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
          type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="resources/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--
    You can also serve Bootstrap CSS from CDN
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    -->
    <link href="resources/assets/css/login.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="login-body">
    <article class="container-login center-block">
        <section>
            <ul id="top-bar" class="nav nav-tabs nav-justified">
                <li class="active"><a href="#">Login</a></li>
                <li><a href="register">Register</a></li>
            </ul>
            <div class="tab-content tabs-login col-lg-12 col-md-12 col-sm-12 cols-xs-12">
                <div id="login-access" class="tab-pane fade active in">
                    <h2 class="logo"><img style="width:100px" src="resources/assets/images/logo.png"></h2>
                    <form method="post" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal">
                        <div class="form-group ">
                            <?php
                            if (Request::get('login_message') !== null) {
                                echo '<div class="alert '.Request::get('type').'">
                                        '.Request::get('login_message').'
                                    </div>';
                            }
                            ?>
                            <label for="login" class="sr-only">Email</label>
                            <input type="text" class="form-control" name="email" id="login_value"
                                   placeholder="Email" tabindex="1" value=""/>
                        </div>
                        <div class="form-group ">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" class="form-control" name="password" id="password"
                                   placeholder="Password" value="" tabindex="2"/>
                        </div>
                        <div class="checkbox">
                            <label class="control-label" for="remember_me">
                                <input type="checkbox" name="remember" id="remember_me" value="1" class=""
                                       tabindex="3"/> Remember Me
                            </label>
                        </div>
                        <br/>
                        <div class="form-group ">
                            <button type="submit" id="submit" tabindex="5" class="btn btn-lg btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </article>
</div>
<div class="clearfix" style="margin-bottom:10px"></div>

<script type="javascript" src="resources/assets/js/bootstrap.min.js"></script>
<script type="javascript" src="resources/assets/js/jquery.min.js"></script>

<!--
You can also serve Bootstrap and jQuery from CDN
<script type="javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
-->
</body>
</html>