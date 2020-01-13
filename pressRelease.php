<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Δελτία Τύπου</title>
</head>

<body>
	<?php
	// Initialize the session
	session_start();
	// Check if the user is logged in, if not then show logoutmenu
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
	{
		include 'topMenu.php';
	}
	else
	{
		include 'topMenuLoggedIn.php';
	}
	?>
	<div class="row">
		<div class="col-lg-3">
		</div>
		<div class="col-lg-6">
				<script src="//rss.bloople.net/?url=http%3A%2F%2Fwww.oasa.gr%2Fnews%2Fel%2Fdeltiatipounews.xml&showtitle=false&type=js"></script>
		</div>
		<div class="col-lg-3">
		</div>
	</div>	
</body>

</html>