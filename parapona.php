<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Παράπονα</title>
</head>

<body>
	<div style="height: 100vh;">
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
			<li class="breadcrumb-item " aria-current="page">Επικοινωνία</li>
			<li class="breadcrumb-item " aria-current="page">Παράπονα</li>
		</ol>
		<h2 style="text-align: center;" class="display-6">Αποστολή Παραπόνων</h2>
		<div style="display: flex;justify-content:center;margin-bottom:20px;">
			<form style="box-shadow: 0 0 5px;padding:30px 100px;" action="mailto:someone@example.com" method="post" enctype="text/plain">
				Όνομα:<br>
				<input type="text" name="name"><br>
				Τηλέφωνο:<br>
				<input type="tel" name="tel"><br>
				Email:<br>
				<input type="text" name="mail"><br>
				Παράπονο:<br>
				<input type="text" name="comment" size="50"><br><br>
				<input class="btn btn-dark" type="submit" value="Αποστολή">
				<input class="btn btn-danger" type="reset" value="Reset">
			</form>
		</div>
		<?php include 'footer.php'; ?>
	</div>
</body>

</html>