<?php
session_start();

$cardID = $_REQUEST['cardID'] ;
$payCard = $_REQUEST['payCard'] ;
$name = $_REQUEST['name'] ;
$tel = $_REQUEST['tel'] ;
$packet = $_REQUEST['packet'] ;

$_SESSION['cardID'] = $cardID;
$_SESSION['name'] = $name;

$thanks_message ="";

if(isset($_SESSION['name']))
{
	$thanks_message = 'Η φόρτιση της κάρτας '.$_SESSION['cardID'].' <b>ολοκληρώθηκε</b> με επιτυχία και προστέθηκε το πακέτο '.$packet.'! <br><a href="../index.php"><font color=#d60000>Αρχική</font></a>';
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
		<?php include '../topMenu.php'; ?>
		<?php echo $thanks_message; ?>
	</body>
</html>