<!-- Menu -->
<nav id="menu">
    <h2>Menu</h2>
    <ul>
        <li><a href="home">Home</a></li>
        <li><a href="routing">Routing</a></li>
        <li><a href="controller">Controllers</a></li>
        <li><a href="service">Services</a></li>
        <li><a href="model">Models</a></li>
        <?php
        if (Sentry::check()) {
            echo('<li><a href="admin">Admin Page </a></li>');
            echo('<li><a href="logout">Logout </a></li>');
        } else {
            echo('<li><a href="login">Login</a></li>');
        }?>
    </ul>
</nav>