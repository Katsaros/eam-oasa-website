<?php
	session_start();

	require_once "includes/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Δελτία Τύπου</title>
</head>
<body>
	<?php
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
	<ol style="background: #fff;border-bottom:2px solid black" class="breadcrumb">
		<li class="breadcrumb-item " aria-current="page">Πληροφόρηση</li>
		<li class="breadcrumb-item " aria-current="page">Αναζήτηση</li>
	</ol>
	<div class="row">
		<div class="col-lg-3">
		</div>
		<div class="col-lg-6">
			<center><h2 class="page-header">Αναζήτηση Πληροφοριών</h2></center>
			<hr>
			<form method="POST" action="search.php" style="display: flex;">
					<input type="text" class="form-control" name="q" placeholder="πχ 250" />
					<input type="submit" name="search" class="btn btn-primary" value="Αναζήτηση" />
			</form>
			<?php
				if(isset($_POST['search']))
				{
				   mysqli_set_charset($link, "utf8");
					$q = $_POST['q'];
					
					$sql = "SELECT * FROM line WHERE code = '$q'";
					$result = $link->query($sql);
					$row = $result->fetch_array(MYSQLI_ASSOC);

					if ($row['code'] != "") 
					{
						echo "Κωδικός: ".$row['code'];
						echo "<br>";
						echo "Τύπος: ".$row['transportation_type'];
						echo "<br>";
						echo "Στάσεις: ".$row['number_of_stops'];
						echo "<br>";
						if($row['is_circular'] == 1)
							echo "Κυκλική διαδρομή: ΝΑΙ";
						else
							echo "Κυκλική διαδρομή: ΟΧΙ";
						echo "<br>";

						$idStart = $row['starting_point_stop_id'];
						$idStop = $row['destination_stop_id'];

						$sql2 = "SELECT name FROM stop WHERE id = '$idStart'";
						$result2 = $link->query($sql2);
						$name2 =  $result2->fetch_array(MYSQLI_ASSOC);
						echo "Αφετηρία: ".$name2['name'];
						echo "<br>";
						
						$sql3 = "SELECT name FROM stop WHERE id = '$idStop'";
						$result3 = $link->query($sql3);
						$name3 = $result3->fetch_array(MYSQLI_ASSOC);
					
						echo "Τέρμα: ".$name3['name'];
						echo "<br>";
						echo "<br>";
						echo "Στάσεις:";
						echo "<br>";

						$sql4 = "SELECT * FROM line_has_stop WHERE line_code = '$q'";
						$result4 = $link->query($sql4);
						while($name4 = $result4->fetch_array(MYSQLI_ASSOC))
						{
							$idFinal = $name4['stop_id'];
							$sqlFinal = "SELECT * FROM stop WHERE id = '$idFinal'";
							$resultFinal = $link->query($sqlFinal);
							$nameFinal =  $resultFinal->fetch_array(MYSQLI_ASSOC);

							echo $name4['number'].". ".$nameFinal['name']."<br>";
						}
						
					}
					else
					{
						echo "Κανένα Αποτέλεσμα";  
					}
				}
				$link->close();
			?>
			</div>
		<div class="col-lg-3"></div>
	</div>
</body>
</html>