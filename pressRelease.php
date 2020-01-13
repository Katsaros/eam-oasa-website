<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
	<?php
	// Initialize the session
	session_start();
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
    <ul>
        <li style="font-size: 12px;color: blue;cursor: pointer;margin: 5px 0px;">
            <strong>
                26.11.19 Στη δημιουργία νέας express γραμμής Κηφισός - Σταθμός Ελαιώνας προχωρά ο ΟΑΣΑ. Ενισχύεται η
                διαλειτουργικότητα με τα μέσα σταθερής τροχιάς
            </strong>
        </li>
        <li style="font-size: 12px;color: blue;cursor: pointer;margin: 5px 0px;">
            <strong>
                5.11.19 Ανανέωση δικαιώματος μετακίνησης με μειωμένο κόμιστρο για πολύτεκνους γονείς και μέλη πολύτεκνων
                οικογενειών, μαθητές και φοιτητές εξωτερικού. Παράταση στην ανανέωση δικαιώματος μετακίνησης φοιτητών.
            </strong>
        </li>
        <li style="font-size: 12px;color: blue;cursor: pointer;margin: 5px 0px;">
            <strong>
                08.10.19 Στην ανάπτυξη ενός αξιόπιστου και λειτουργικού δικτύου λεωφορειακών γραμμών προχωρά ο ΟΑΣΑ
            </strong>
        </li>
        <li style="font-size: 12px;color: blue;cursor: pointer;margin: 5px 0px;">
            <strong>
                30.09.19 Ανανέωση δικαιώματος μετακίνησης με μειωμένο κόμιστρο για τους φοιτητές με την έναρξη κάθε νέου
                ακαδημαϊκού έτους
            </strong>
        </li>
        <li style="font-size: 12px;color: blue;cursor: pointer;margin: 5px 0px;">
            <strong>
                11.07.19 ΘΕΑΤΡΟ EXPRESS Στάσεις - Παραστάσεις.
            </strong>
        </li>
        <li style="font-size: 12px;color: blue;cursor: pointer;margin: 5px 0px;">
            <strong>
                01.07.19 ΝEA ΨΗΦΙΑΚΗ ΕΠΟΧΗ ΓΙΑ ΤΗ ΣΤΑΣΥ ΜΕ ΤΙΣ ΣΦΑΙΡΙΚΕΣ ΦΩΤΟΓΡΑΦΙΕΣ -360 ΜΟΙΡΩΝ - ΤΩΝ ΣΤΑΘΜΩΝ ΤΗΣ ΣΤΟ
                GOOGLE MAPS-GOOGLE STREET VIEW.
            </strong>
        </li>
        <li style="font-size: 12px;color: blue;cursor: pointer;margin: 5px 0px;">
            <strong>
                22.05.19 Ενημέρωση προς το επιβατικό κοινό.
            </strong>
        </li>
        <li style="font-size: 12px;color: blue;cursor: pointer;margin: 5px 0px;">
            <strong>
                03.05.19 ΔΗΛΩΣΗ ΤΟΥ ΑΠΕΡΧΟΜΕΝΟΥ ΠΡΟΕΔΡΟΥ ΤΟΥ ΔΣ ΤΟΥ ΟΑΣΑ ΤΑΣΟΥ ΤΑΣΤΑΝΗ
            </strong>
        </li>
        <li style="font-size: 12px;color: blue;cursor: pointer;margin: 5px 0px;">
            <strong>
                04.04.19 ΘΕΑΤΡΟ EXPRESS Στάσεις - Παραστάσεις Μια συνεργασία του Εθνικού Θεάτρου με τον Όμιλο ΟΑΣΑ
            </strong>
        </li>
        <li style="font-size: 12px;color: blue;cursor: pointer;margin: 5px 0px;">
            <strong>
                28.03.19 Μνημόνιο συνεργασίας μεταξύ του ΟΑΣΑ και του υπουργείου Προστασίας του Πολίτη
            </strong>
        </li>
        <li style="font-size: 12px;color: blue;cursor: pointer;margin: 5px 0px;">
            <strong>
                22.01.19 Εισήγηση του Προέδρου του ΔΣ του ΟΑΣΑ Τάσου Ταστάνη στο Συνέδριο 2st EcoMobility Conference
                2019.
            </strong>
        </li>

    </ul>
</body>

</html>