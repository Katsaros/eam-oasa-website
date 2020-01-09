<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Αγορά</title>
  </head>
  <body>
	<?php include 'topMenu.php'; ?>
	<!-- Η φόρμα αρχίζει εδώ -->
	<form method="post" action="done/thankyou_agora.php"> 
		<div class="form-group col-lg-6 col-xs-12">                                
			<input type="text" name="name"  placeholder="Όνομα Κατόχου*"  required>
		</div>
		<div class="form-group col-lg-6 col-xs-12">                                
			<input type="text" name="odos"  placeholder="Διεύθυνση Κατοικίας*"  required>
		</div>
		<div class="form-group col-lg-6 col-xs-12">
			<input type="tel" name="tel" placeholder="Τηλέφωνο*" required>
		</div>
		<div class="form-group col-lg-6 col-xs-12">
			<input type="email" name="email_address" placeholder="Email*" required>
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
			<textarea name="comments" maxlength="500" placeholder="Αν θέλετε αφήνετε κάποιο σχόλιο"></textarea>
		</div>
		<div class="form-group col-lg-12 col-xs-12">
			<button>Φόρτιση Κάρτας</button>
		</div>
	</form>
	<!-- Η φόρμα τελειώνει εδώ -->
  </body>
</html>