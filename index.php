<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Αρχική</title>
</head>

<body>
	<div style="min-height: 100vh;">
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
		<div class="d-flex flex-wrap justify-content-between">
			<div style="flex:1;padding:30px;display:grid;grid-template-columns: repeat( auto-fit, minmax(250px, 1fr) );grid-gap:15px;">
				<div style="box-shadow: 0 0 5px" class="card">
					<div style="width: 100%;padding:50px;height:250px;max-width:300px;">
						<img src="https://image.flaticon.com/icons/svg/1154/1154044.svg" class="card-img-top" alt="...">
					</div>
					<div class="card-body">
						<h5 class="card-title">Kόστος εισητηρίων</h5>
						<p class="card-text">Μάθε για όλες τις τιμές των εισητηρίων σε όλα τα μέσα,δες όλα τα διαθέσιμα πακέτα και αποφάσισε το καλύτερο για εσένα</p>
						<a href="#" class="btn btn-dark">Κόστος</a>
					</div>
				</div>
				<div style="box-shadow: 0 0 5px" class="card">
					<div style="width: 100%;padding:50px;height:250px;max-width:300px;">
						<img src="https://image.flaticon.com/icons/svg/470/470717.svg" class="card-img-top" alt="...">
					</div>
					<div class="card-body">
						<h5 class="card-title">Βέλτιστη Διαδρομή</h5>
						<p class="card-text">Ενδιαφέρεσαι να μάθεις ποια είναι η βέλτιστη διαδρομή για να πας στον προορισμό σου;Δες την πιο γρήγορη επιλογή άμεσα με ενα κλίκ</p>
						<a href="#" class="btn btn-dark">Βέλτιστη διαδρομή</a>
					</div>
				</div>
				<div style="box-shadow: 0 0 5px" class="card">
					<div style="width: 100%;padding:50px;height:250px;max-width:300px;">
						<img src="https://image.flaticon.com/icons/svg/2038/2038466.svg" class="card-img-top" alt="...">
					</div>
					<div class="card-body">
						<h5 class="card-title">Δρομολόγια</h5>
						<p class="card-text">Δες όλες της πληροφορίες για τα Δρομολόγια για όποιο μέσο σε ενδιαφέρει</p>
						<a href="#" class="btn btn-dark">Δρομολόγια</a>
					</div>
				</div>
				<div style="box-shadow: 0 0 5px" class="card">
					<div style="width: 100%;padding:50px;padding-top:80px;height:250px;max-width:300px;">
						<img src="https://image.flaticon.com/icons/svg/1086/1086741.svg" class="card-img-top" alt="...">
					</div>
					<div class="card-body">
						<h5 class="card-title">Φόρτιση κάρτας</h5>
						<p class="card-text">Μπορείς άμεσα να φορτίσεις την κάρτα σου εύκολα,γρήγορα και με την με μέγιστη ασφάλεια</p>
						<a href="#" class="btn btn-dark">Φόρτιση</a>
					</div>
				</div>

			</div>
			<div style="flex:1;padding:30px;">
				<div>
					<video width="100%" controls="">
						<source type="video/mp4" src="http://oasa.gr/media/xmas_visual3b.mp4"></video>
				</div>
				<div style="box-shadow: 0 0 5px;width:100%;margin:30px auto;">
					<div style="background: #fff" class="jumbotron">
						<h1 class="display-8">Καλωσορίσατε στην ιστοσελίδα του OASA!</h1>
						<p class="lead">Ενδιαφέρεσαι να μάθεις για την ιστορία του ΟΑΣΑ</p>
						<hr class="my-4">
						<p>Οι Συγκοινωνίες Αθηνών είναι οι δημόσιες υπηρεσίες μετακίνησης, που προσφέρουν οι Ο.Α.Σ.Α., ΣΤΑ.ΣΥ. (μετρό, ηλεκτρικός και τραμ) και Ο.ΣΥ. (λεωφορεία και τρόλεϊ), οι οποίες λειτουργούν με τρόπο ενιαίο για να κάνουν πραγματικότητα την ιδέα: «Μια πόλη. Ένα δίκτυο.»</p>
						<a class="btn btn-dark btn-lg" href="#" role="button">Ιστορία</a>
					</div>
				</div>
			</div>
		</div>
		<?php include 'footer.php'; ?>
	</div>
</body>

</html>