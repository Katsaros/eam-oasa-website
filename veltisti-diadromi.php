<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Αποτελέσματα</title>
</head>

<body>
	<div style="min-height: 100vh;position:relative;">
		<?php
		// Initialize the session
		session_start();
		// Check if the user is logged in, if not then show logoutmenu
		if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
			include 'topMenu.php';
		} else {
			include 'topMenuLoggedIn.php';
		}
		?>
		<ol class="breadcrumb">
			<li class="breadcrumb-item " aria-current="page">Μετακίνηση</li>
			<li class="breadcrumb-item " aria-current="page">Βέλτιση Διαδρομή</li>
		</ol>
		<div style="text-align: center;">
			<h5>Αναζήτηση Βέλτιστης Διαδρομής</h5>
			<form method=" post" action="results-and-map.php">
				<input type="text" name="start_point" placeholder="Αφετηρία">
				<input type="text" name="end_point" placeholder="Τέρμα">
				<button>Αναζήτηση</button>
			</form>
		</div>
	</div>
	<div style="position:absolute;bottom:0;width:100vw;">
		<?php include 'footer.php'; ?>
	</div>
</body>


</html>