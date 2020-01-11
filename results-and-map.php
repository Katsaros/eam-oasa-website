<?php
$start_point = "Kallithea";
$end_point = "Monastiraki";
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
	<?php include 'topMenu.php'; ?>
	<div class="row">
		<div class="col-lg-6">
			<center>
				<h5>Επιλέξατε Προορισμό:</h5>
				<iframe width="100%" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=<?php echo $end_point?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
				<br>
				<a target="_blank" href="https://www.google.com/maps/dir/<?php echo $start_point?>/<?php echo $end_point?>/@37.9673387,23.6987894,14z/data=!3m1!4b1!4m14!4m13!1m5!1m1!1s0x14a1bc5b6d11b785:0x88b81f80f9d30d43!2m2!1d23.6987635!2d37.9556559!1m5!1m1!1s0x14a1bd22e7a72ef5:0x2600bd2df93b4f52!2m2!1d23.7268379!2d37.9758108!3e3">Δείξε μου την διαδρομή</a>
			</center>
		</div>
		<div class="col-lg-6">
			
		</div>
	</div>
  </body>
</html>
