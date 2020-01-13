<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Αρχική</title>
</head>

<body>
  <div style="height: 100vh;">
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
    <div style="height: 100%;">
	<br>
	<div class="row">
		<div class="col-lg-3">
			<center><h2>Διαγωνισμοί</h2></center><hr>
			<script src="//rss.bloople.net/?url=http%3A%2F%2Fwww.oasa.gr%2Fnews%2Fel%2Fprodianews.xml&limit=6&showtitle=false&type=js"></script>
		</div>
		<div class="col-lg-6">
			<center><h2>Καλωσορίσατε στην ιστοσελίδα του OASA</h2></center><hr>
			<video width="100%" controls=""><source type="video/mp4" src="http://oasa.gr/media/xmas_visual3b.mp4"></video>
			</div>
		<div class="col-lg-3">
			<center><h2>Ανακοινώσεις</h2></center><hr>
			<script src="//rss.bloople.net/?url=http%3A%2F%2Fwww.oasa.gr%2Fnews%2Fel%2Fanaknews.xml&limit=10&showtitle=false&type=js"></script>
		</div>
	</div>	
    <?php include 'footer.php'; ?>
  </div>
</body>

</html>