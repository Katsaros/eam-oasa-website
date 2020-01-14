<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Φόρτιση</title>
</head>

<body>
	<div style="min-height:100vh;position:relative;color:#343A40">
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
			<li class="breadcrumb-item " aria-current="page">Φόρτιση Κάρτας</li>
		</ol>
		<!-- Η φόρμα αρχίζει εδώ -->
		<div style="padding:50px; display: flex;justify-content:center;">
			<form method="post" action="done/thankyou_fortisi.php">
				<div class="form-group col-lg-6 col-xs-12">
					<input type="text" name="name" placeholder="Όνομα Κατόχου*" required>
				</div>
				<div class="form-group col-lg-6 col-xs-12">
					<input type="text" name="cardID" placeholder="Αριθμός Κάρτας*" required>
				</div>
				<div class="form-group col-lg-6 col-xs-12">
					<input type="tel" name="tel" placeholder="Τηλέφωνο*" required>
				</div>
				<div class="form-group col-lg-6 col-xs-12">
					<input type="number" name="payCard" placeholder="Πιστωτική/Χρεωστική κάρτα*" required>
				</div>
				<div class="form-group col-lg-12 col-xs-12">
					<select name='packet'>
						<option value="0" disabled="" selected="" style="display:none;">Επιλογή Πακέτου</option>
						<option>1 Διαδρομή - 2€</option>
						<option>10 Διαδρομές - 15€</option>
						<option>30 Διαδρομές - 30€</option>
						<option>100 Διαδρομές - 50€</option>
					</select>
				</div>
				<div class="form-group col-lg-12 col-xs-12">
					<button class="btn btn-dark">Φόρτιση Κάρτας</button>
				</div>
				<!-- Η φόρμα τελειώνει εδώ -->
			</form>
		</div>
		<div style="position:absolute;width:100vw;">
			<?php include 'footer.php'; ?>
		</div>
	</div>
	</div>
</body>

</html>