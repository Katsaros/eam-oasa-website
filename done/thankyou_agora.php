<?php
session_start();

$payCard = $_REQUEST['payCard'] ;
$name = $_REQUEST['name'] ;
$tel = $_REQUEST['tel'] ;
$packet = $_REQUEST['packet'] ;
$odos = $_REQUEST['odos'] ;

$_SESSION['name'] = $name;

$thanks_message ="";
$generatedCardId = substr(md5(microtime()),rand(0,26),5);

if(isset($_SESSION['name']))
{
	$thanks_message = 'Η αγορά της κάρτας '.$generatedCardId.' στο όνομα του κατόχου '.$_SESSION['name'].' <b>ολοκληρώθηκε</b> με επιτυχία και προστέθηκε το πακέτο '.$packet.'!<br>Διεύθυνση αποστολής κάρτας: '.$odos.' <br><a href="../index.php"><font color=#d60000>Επιστροφή στην Αρχική</font></a>';
	unset($_SESSION['name']);
}
else
{
	$thanks_message = "Χαθήκατε; <h2><a href='../index.php'><font color=#d60000>Επιστροφή στην Αρχική</font></a></h2><br>";
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Ολοκληρώθηκε!</title>
	</head>
	<body>
		<!--<?php include '../topMenu.php'; ?>-->
		<?php echo $thanks_message; ?>
	</body>
</html>