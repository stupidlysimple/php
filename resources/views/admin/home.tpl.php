<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<?php Viewer::file('../layouts/head', $data = ['title' => 'StupidlySimple PHP | Home']); ?>
<body>
<!-- Wrapper -->
<div id="wrapper">

    <?php Viewer::file('layouts/top', $top_data = ['is_admin' => true]); ?>

    <?php Viewer::file('layouts/menu') ?>

    <!-- Main -->
    <div id="main">
        <div class="inner">
            <div class="contents">
                <h1>Welcome to the Admin Area</h1>
                <p>A very fresh start for the MVC framework with some basic CRUD functions</p>

                <?php
                if (Core\Request::get('delete') === 'success') {
                    echo '<p class="alert alert-success">User successfully deleted</p>';
                } elseif (Core\Request::get('edit') === 'success') {
                    echo '<p class="alert alert-success">User successfully updated</p>';
                } elseif (Core\Request::get('delete') === 'failed') {
                    echo '<p class="alert alert-danger">Failed to delete</p>';
                } elseif (Core\Request::get('edit') === 'failed') {
                    echo '<p class="alert alert-danger">Failed to update</p>';
                }

                ?>

                <ul class="nav nav-tabs" style="margin-top: 20px">
                    <li class="active"><a data-toggle="tab" href="#Users">Users</a></li>
                    <li><a data-toggle="tab" href="#home">Profile</a></li>
                </ul>

                <div class="tab-content">
                    <div id="Users" class="tab-pane fade in active">
                        <div style="max-width:600px; padding: 10px;">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Username/Email</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($service->test->getRegisteredUsers() as $user) {
                                    echo '<tr>';
                                    echo '<td>'.$user->first_name.'</td>';
                                    echo '<td>'.$user->last_name.'</td>';
                                    echo '<td>'.$user->email.'</td>';
                                    echo '<td><a onclick="return confirm(\'Are you sure?\');" href="deleteuser?id='.$user->id.'" class="btn btn-danger">Delete</a></td>';
                                    echo '</tr>';
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="home" class="tab-pane fade">
                        <div style="max-width:600px; padding: 50px 10px;">
                            <form method="POST" action="updateuser">
                                <input type="hidden" name="id" value="<?= Sentry::getUser()->id; ?>">
                                <div class="form-group">
                                    First Name: <input type="text" name="first_name" value="<?= Sentry::getUser()->first_name; ?>" class="input-sm">
                                </div>
                                <div class="form-group">
                                    Last Name: <input type="text" name="last_name" value="<?= Sentry::getUser()->last_name; ?>" class="input-sm">
                                </div>
                                <div class="form-group">
                                    Email: <input type="text" name="email" value="<?= Sentry::getUser()->email; ?>" class="input-sm">
                                </div>
                                <div class="form-group">
                                    Password: <input name="password" type="password" class="input-sm">
                                </div>
                                <div class="form-group">
                                    <button class="button special">Change details</button>
                                    <input class="button " value="Reset" type="reset">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php Viewer::file('layouts/footer') ?>

</div>

<?php Viewer::file('layouts/scripts') ?>
</body>
</html>