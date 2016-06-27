<html>
<head>
</head>
<style type="text/css"><?php include('style.css'); ?></style>
<div class="dss_main">
	<div class="dss_error">
		<h1><b>Error:</b> <?= $message['message'] ?></h1>
		<p>In file: <b><?= $message['file']?></b>, line <b><?= $message['line']?></b> </p>
	</div>

</div>
</html>
