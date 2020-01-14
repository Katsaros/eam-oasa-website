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
	<div style="min-height: 100vh;" class=" d-flex flex-column justify-content-between">
		<div>
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
			<ol style="background: #fff;border-bottom:2px solid black" class="breadcrumb">
				<li class="breadcrumb-item " aria-current="page">Μετακίνηση</li>
				<li class="breadcrumb-item " aria-current="page">Βέλτιση Διαδρομή</li>
			</ol>
			<div style="text-align: center;">
				<h5>Αναζήτηση Βέλτιστης Διαδρομής</h5>
				<form method=" post" action="results-and-map.php">
					<input type="text" name="start_point" placeholder="Αφετηρία">
					<input type="text" name="end_point" placeholder="Τέρμα">
					<button style="margin-bottom: 5px;" class="btn btn-dark ">Αναζήτηση</button>
				</form>
			</div>
		</div>
		<?php include 'footer.php'; ?>
	</div>
</body>


</html>